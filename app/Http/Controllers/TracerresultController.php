<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerresultController extends Controller
{
    public function index(Request $request)
    {
        $user = null;

        if (Auth::guard('user')->check()) {
            $user = User::findOrFail(auth()->id());
        }

        return view('back.pages.user.data-overview.chart-data-tracerstudy', compact('user'));
    }
}
