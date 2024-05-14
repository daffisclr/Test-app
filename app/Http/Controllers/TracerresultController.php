<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TracerresultController extends Controller
{
    public function index(Request $request)
    {
        $admin = null;

        if (Auth::guard('admin')->check()) {
            $admin = Admin::findOrFail(auth()->id());
        }

        return view('back.pages.admin.data-overview.chart-data-tracerstudy', compact('admin'));
    }

}
