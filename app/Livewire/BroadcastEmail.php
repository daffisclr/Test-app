<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BroadcastEmail extends Component
{
    public function render()
    {
        return view('livewire.broadcast-email');
    }

    public function broadcast_email()
    {
        //get all alumni email
        $recepients = DB::table('admins')->select('email AS mail_recipient_email', 'name AS mail_recipient_name')->where('role_id', '=', 2)->where('valid_status', '=', 1)->get();

        // customise the email body
        $mail_body = view('email-templates.broadcast-email-template', /*$data*/)->render();

        $mailConfig = array(
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME '),
            'mail_recipient' => $recepients,
            'mail_subject' => 'Broadcast Email', //change subject
            'mail_body' => $mail_body
        );

        if (sendEmail($mailConfig)) {
            session()->flash(
                'success',
                'We have e-mailed your password reset link.'
            );
        } else {
            session()->flash('fail', 'Something went wrong!');
        }
    }
}
