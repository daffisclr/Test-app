<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        return view('back.pages.questionnaire');
    }

    public function kuesioner_form(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);

        dd($request);

        return back()->with('success', 'Done! Data Successfully Saved');
    }
}
