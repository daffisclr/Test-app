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

        return view('back.pages.questionnaire');
    }

    public function kuesioner_form(Request $request)
    {

        $success = false;

        $request->validate([
            "p_name" => 'required',
            "p_nim" => 'required',
            "p_email" => 'required',
            "p_phone" => 'required',
            "p_gender" => 'required',
            "p_religion" => 'required',
            "p_graduation_year" => 'required',
            "p_major_study" => 'required',
            "p_degree" => 'required',
        ], ['required' => 'Field is required']);

        $admin = '';
        $form_value = $request->post();

        if (Auth::guard('admin')->check()) {
            $admin = Admin::findorFail(auth()->id());
        }

        dd($form_value);

        //Begin db transaction for questionare answers
        DB::beginTransaction();

        if ($success) {
            DB::commit();
            return response()->json(['response' => 'success', 'message' => 'Success! Data has been added.'], 200);
        } else {
            DB::rollback();
            // something went wrong
            return response()->json(['response' => 'error', 'message' => 'Error! Something went wrong.'], 500);
        }
    }
}
