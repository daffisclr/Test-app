<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class BroadcastController extends Controller
{
    public function index(Request $request)
    {
        $admin = null;

        if (Auth::guard('admin')->check()) {
            $admin = Admin::findOrFail(auth()->id());
        }

        return view('back.pages.admin.broadcast', compact('admin'));
    }

    public function broadcast_email(Request $request)
    {
        //get Email
        $recepients = explode(',', $request->email);
        $email_pattern = '/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix';

        foreach ($recepients as $key => $value) {
            $pattern =
                Str::of($value)->test($email_pattern);

            if (!$pattern) {
                session()->flash('fail', 'The Email is not correct!');
                return redirect()->back();
            }
        }

        $base_url = URL::to('/');
        $guest_kuesioner = $base_url . 'company-kuesioner';
        // dd($recepients);
        // customise the email body
        $mail_body = view('email-templates.broadcast-email-template', compact('guest_kuesioner'))->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME '),
            'mail_recipient' => $recepients,
            'mail_subject' => 'Broadcast Email', //change subject
            'mail_body' => $mail_body
        );

        if (broadcastEmail($mailConfig)) {
            session()->flash(
                'success',
                'We have e-mailed your password reset link.'
            );
            return redirect()->back();
        } else {
            session()->flash('fail', 'Something went wrong!');
            return redirect()->back();
        }
    }
}
