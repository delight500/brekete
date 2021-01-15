<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaints;
use App\Models\Activites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class PendingComplaintsController extends Controller
{
     public function index()
    {
        $complaints = Complaints::where('complaint_status', 'pending')->orderBY('id', 'DESC')->get();

        return view('admin.pending_complaints.index')->with([
            'complaints' => $complaints,
        ]);
    }


    public function resolve(Request $request, $id)
    {
        $complaint = Complaints::where('id', $id)->get();
        Complaints::where('id', $id)->update(['complaint_status' => 'resolved']);
        Complaints::find($id)->replicate()->setTable('resolved_complaints')->save();

        $code = implode('', $complaint->pluck('tracking_code')->toArray());
        $auth = Auth::user();

        Activites::create([
            'description' =>$auth->name.' Resolved a complaint, Complaint Tracking code:'. $code,
            'username' => $auth->name,
            'privilage' => implode(' ', $auth->roles->pluck('name')->toArray()),
            'status' => 'pending'
        ]);

        Session::flash('flash_message', 'Complaint has been resolved');
        return redirect(route('pending'));
    }
    public function flagged(Request $request, $id)
    {


        $complaint = Complaints::where('id', $id)->get();

        DB::table('complaints')->where('id', $id)
            ->update(['complaint_status' => 'flagged',]);

        Complaints::find($id)->replicate()->setTable('flagged_complaints')->save();
        $code = implode('', $complaint->pluck('tracking_code')->toArray());
        $auth = Auth::user();
        Activites::create([
            'description' =>$auth->name.' flagged a complaint, Complaint Tracking code:'. $code,
            'username' => $auth->name,
            'privilage' => implode(' ', $auth->roles->pluck('name')->toArray()),
            'status' => 'pending'
        ]);

        Session::flash('flash_message', 'Complaint has been flagged');
        return redirect(route('awaiting'));
    }
}
