<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions')->select()->where('valid_status', '=', 1)->get();

        return view('back.pages.questionnaire', compact('questions'));
    }

    public function kuesioner_form(Request $request)
    {
        $request->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "city" => 'required',
            "birth" => 'required',
            "job_title" => 'required',
            "company" => 'required',
            "job_description" => 'required',
            "interview" => 'required',
            "interview_type" => 'required',
            "interview_date" => 'required',
            "interview_time" => 'required',
            "behaviour" => 'required',
            "confidance" => 'required',
            "result" => 'required',
            "comments" => 'required'
        ], ['required' => 'Field is required']);

        $admin = '';
        $question_id = [];
        $form_value = $request->post();
        $questions = DB::table('questions')->select('id', 'input_name')->where('valid_status', '=', 1)->get();

        if (Auth::guard('admin')->check()) {
            $admin = Admin::findorFail(auth()->id());
        }

        //Begin db transaction for questionare answers
        DB::beginTransaction();

        foreach ($form_value as $key => $value) {

            if ($key != '_token') {
                $question_id = $questions->where('input_name', '=', $key)->pluck('id')->first();
                $insert = DB::table('answers')->insert(['question_id' => $question_id, 'admin_id' => $admin->id, 'answer' => $value, 'valid_status' => 1, 'created_at' => date('Y-m-d H:i:s')]);
            }

            // if ($question_id && $admin->id)
        }

        if ($insert) {
            DB::commit();
            return 1;
        } else {
            DB::rollback();
            // something went wrong
            return 0;
        }
    }
}
