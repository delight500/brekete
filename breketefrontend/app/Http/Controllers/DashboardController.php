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
        $complaints = count(DB::table('complaints')->where('user_id', $auth->id)->get());
        $pending = count(DB::table('complaints')->where('user_id', $auth->id )->where('complaint_status', 'pending')->get());
        $testimonial = count(Testimonial::all());
        $awaiting = count(AwaitingReview::all());
        $resolved = count(DB::table('resolved_complaints')->where('user_id', $auth->id )->get());

        return view('user.dashboard')->with([
        'awaiting' => $awaiting,
        'pending' =>  $pending,
        'complaints' => $complaints,
        'resolved' => $resolved,
        
        ]);

    }

    public function complaint_submit_view()
    {
      return view('user.add_complaints');
    }

    public function complaint_view()
    {
        return view('user.complaints')->with([      
        ]);
    }
}
