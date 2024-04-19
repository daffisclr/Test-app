<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $rules = [];

        $questions = DB::table('questions')->select()->where('valid_status', '=', 1)->get();

        foreach ($questions as $question) {

            array_push($rules, [$question->input_name => $question->rules]);
        }
        // $request->validate($rules);

        dd($rules);
        return $rules;

        return back()->with('success', 'Done! Data Successfully Saved');
    }
}
