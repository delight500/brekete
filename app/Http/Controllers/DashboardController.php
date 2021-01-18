<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{

    public function index()
    {
        $auth = Auth::user();
        $role = implode(' ', $auth->roles->pluck('name')->toArray());

        if ($role === ("SuperAdmin") || $role === ("Admin")) {
            return view('admin.home');
        }
        elseif ($role === "ComplaintAttendant"){
            return view('admin.dashboards.complaint');
        }
        elseif ($role === "ResolutionAttendant"){
            return view('admin.dashboards.resolve');
        }else{
            return redirect(route('home'));
        }

    }
}
