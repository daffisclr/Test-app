<?php

namespace App\Http\Controllers;

use constGuards;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use constDefaults;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:5|max:45'
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email is not exists in system',
                'password.required' => 'Password is required'
            ]);
        } else {
            $request->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|min:5|max:45'
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.exists' => 'Username is not exists in system',
                'password.required' => 'Password is required'
            ]);
        }

        $creds = array(
            $fieldType => $request->login_id,
            'password' => $request->password
        );

        if (Auth::guard('user')->attempt($creds)) {
            return redirect()->route('user.home');
        } else {
            session()->flash('fail', 'Incorrect credentials');
            return redirect()->route('user.login');
        }
    } // End Login Method

    public function logoutHandler(Request $request)
    {
        Auth::guard('user')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('user.login');
    } // End Logout Function

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'The :attribute is required',
            'email.email' => 'Invalid email address',
            'email.exists' => 'The :attribute is not exists in system'
        ]); // Check email for forgot password

        // Get users detail
        $user = User::where('email', $request->email)->first();

        // Generate Token
        $token = base64_encode(Str::random(64));

        // Check if there is an existing reset password token
        $oldtoken = DB::table('password_reset_tokens')
            ->where(['email' => $request->email, 'guard' => constGuards::USER])
            ->first();

        if ($oldtoken) {
            //Update token
            DB::table('password_reset_tokens')
                ->where(['email' => $request->email, 'guard' => constGuards::USER])
                ->update([
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
        } else {
            // Add new token
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'guard' => constGuards::USER,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        $actionLink = route('user.reset-password', ['token' => $token, 'email' => $request->email]);

        $data = array(
            'actionLink' => $actionLink,
            'user' => $user
        );

        $mail_body = view('email-templates.user-forgot-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME '),
            'mail_recipient_email' => $user->email,
            'mail_recipient_name' => $user->name,
            'mail_subject' => 'Reset password',
            'mail_body' => $mail_body
        );

        if (sendEmail($mailConfig)) {
            session()->flash('success', 'We have e-mailed your password reset link.');
            return redirect()->route('user.forgot-password');
        } else {
            session()->flash('fail', 'Something went wrong!');
            return redirect()->route('user.forgot-password');
        }
    } // End of email token

    public function resetPassword(Request $request, $token = null)
    {
        $check_token = DB::table('password_reset_tokens')
            ->where(['token' => $token, 'guard' => constGuards::USER])
            ->first();

        if ($check_token) {
            // Check if token is not expired
            $diffMins = Carbon::createFromFormat('Y-m-d H:i:s', $check_token->created_at)->diffInMinutes(Carbon::now());

            if ($diffMins > constDefaults::tokenExpiredMinutes) {
                // If token expired
                session()->flash('fail', 'Token expired, request another reset password link');
                return redirect()->route('user.forgot-password', ['token=>$token']);
            } else {
                return view('back.pages.user.auth.reset-password')->with(['token' => $token]);
            }
        } else {
            session()->flash('fail', 'Invalid token!, request another reset password link');
            return redirect()->route('user.forgot-password', ['token=>$token']);
        }
    } // End token

    public function resetPasswordHandler(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:5|max:45|required_with:new_password_confirmation|
            same:new_password_confirmation',
            'new_password_confirmation' => 'required'
        ]);

        $token = DB::table('password_reset_tokens')
            ->where(['token' => $request->token, 'guard' => constGuards::USER])
            ->first();

        // Get User detail
        $user = User::where('email', $token->email)->first();

        // Update User Password
        User::where('email', $user->email)->update([
            'password' => Hash::make($request->new_password)
        ]);

        //Delete token records
        DB::table('password_reset_tokens')->where([
            'email' => $user->email,
            'token' => $request->token,
            'guard' => constGuards::USER
        ])->delete();

        // Send email to notify user
        $data = array(
            'user' => $user,
            'new_password' => $request->new_password
        );

        $mail_body = view('email-templates.user-reset-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_recipient_email' => $user->email,
            'mail_recipient_name' => $user->name,
            'mail_subject' => 'Password changed',
            'mail_body' => $mail_body
        );

        sendEmail($mailConfig);
        return redirect()->route('user.login')->with('success', 'Done! Your password has changed. Use new password
        to login into systems');
    }

    // View Profile
    public function profileView(Request $request)
    {
        $user = null;
        if (Auth::guard('user')->check()) {
            $user = User::findOrFail(auth()->id());
        }
        return view('back.pages.user.profile', compact('user'));
    }
}
