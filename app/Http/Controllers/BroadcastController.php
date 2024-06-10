<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class BroadcastController extends Controller
{
    public function index(Request $request)
    {
        $user = null;

        if (Auth::guard('user')->check()) {
            $user = User::findOrFail(auth()->id());
        }

        return view('back.pages.user.broadcast', compact('user'));
    }

    public function broadcast_email(Request $request)
    {
        $request->validate([
            "email" => 'required|email',
            "nama" => 'required',
            "perusahaan" => 'required',
            "jabatan" => 'required',
        ], ['required' => 'Field is required', 'email' => 'Field must be valid email']);

        /** get Email **/
        $form_value = $request->post();


        $base_url = URL::to('/');
        $unique_id = $this->unique_code(6);
        $guest_kuesioner = $base_url . '/user/guest-form?f_id=' . $unique_id;

        DB::beginTransaction();
        
        DB::table('broadcast')->insert([
            'unique_code' => $unique_id,
            'email' => $form_value['email'],
            'name' => $form_value['nama'],
            'company' => $form_value['perusahaan'],
            'position' => $form_value['jabatan'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if (DB::transactionLevel() == 1) {
            DB::commit();
        } else {
            DB::rollback();
            // something went wrong
        }
        // customise the email body
        $mail_body = view('email-templates.broadcast-email-template', compact('guest_kuesioner','form_value'))->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME '),
            'mail_recipient' => null,
            'mail_recipient_email' => $form_value['email'],
            'mail_recipient_name' => $form_value['nama'],
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

    public function form_index(Request $request)
    {
        $form_id = $request->query('f_id');

        session(['f_id' => $form_id]);

        $f_id = $request->session()->get('f_id');

        if (!$form_id || ($f_id && $f_id != $form_id)) {
            $request->session()->forget('f_id');
            return abort(404, 'Something Went Wrong');
        }

        return view('guests.form-pengguna-alumni');
    }

    public function form_create(Request $request)
    {
        $f_id = $request->session()->get('f_id');

        $request->validate([
            "company_name" => 'required',
            "name" => 'required',
            "position" => 'required',
            "alumni_name" => 'required',
            "alumni_program" => 'required',
            "alumni_degree" => 'required',
            "alumni_graduation" => 'required',
            "ethics" => 'required',
            "competency" => 'required',
            "language" => 'required',
            "tech" => 'required',
            "communication" => 'required',
            "teamwork" => 'required',
            "development" => 'required',
            "readiness" => 'required',
            "remarks" => 'required',
            "recommendation" => 'required'
        ], ['required' => 'Field is required']);


        $form_value = $request->post();

        //Begin db transaction for questionare answers
        DB::beginTransaction();

        $broadcast_id = DB::table('broadcast')->select(["id"])->where('unique_code',"=", $f_id)->first();

        if (!$broadcast_id->id) {
            DB::rollback();
            // something went wrong
            session()->flash('fail', 'Something went wrong!');
            return redirect()->back();
        }

        //Table Kuesioner Guest
        DB::table('kuesioner_company')->insert([
            'broadcast_id' => $broadcast_id->id,
            'unique_code' => $f_id,
            'company_name' => $form_value['company_name'],
            'name' => $form_value['name'],
            'position' => $form_value['position'],
            'email' => $form_value['email'],
            'phone' => $form_value['phone'],
            'alumni_name' => $form_value['alumni_name'],
            'alumni_program' => $form_value['alumni_program'],
            'alumni_degree' => $form_value['alumni_degree'],
            'alumni_graduation' => $form_value['alumni_graduation'],
            'ethics' => $form_value['ethics'],
            'competency' => $form_value['competency'],
            'language' => $form_value['language'],
            'tech' => $form_value['tech'],
            'communication' => $form_value['communication'],
            'teamwork' => $form_value['teamwork'],
            'development' => $form_value['development'],
            'readiness' => $form_value['readiness'],
            'remarks' => $form_value['remarks'],
            'recommendation' => $form_value['recommendation'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if (DB::transactionLevel() == 1) {
            DB::commit();
            session()->flash(
                'success',
                'Success! Data has been added.'
            );
            return redirect()->back();
        } else {
            DB::rollback();
            // something went wrong
            session()->flash('fail', 'Something went wrong!');
            return redirect()->back();
        }
    }

    function unique_code($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
