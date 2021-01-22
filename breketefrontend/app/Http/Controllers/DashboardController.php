<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\AwaitingReview;
use App\Models\Complaints;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        $auth = Auth::user();
        $complaints = count(Complaints::all());
        $pending = count(DB::table('complaints')->where('complaint_status', 'pending')->get());
        $testimonial = count(Testimonial::all());
        $awaiting = count(AwaitingReview::all());

        return view('user.dashboard')->with([
        'awaiting' => $awaiting,
        'pending' =>  $pending,
        'complaints' => $complaints,
        ]);

    }
}
