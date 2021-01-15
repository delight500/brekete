<?php

namespace App\Http\Controllers;
use App\Models\Complaints;
use App\Models\ComplaintUploads;
use App\Models\FlaggedComplaints;
use Illuminate\Http\Request;
use App\Models\Activites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FlaggedComplaintsController extends Controller
{
  public function index()
    {

        $complaints = FlaggedComplaints::orderBY('id', 'DESC')->get();
        return view('admin.flagged_complaints.index')->with([
            'complaints' => $complaints,
        ]);
    }


    public function restore( $id)
    {
        $pending = 'pending';
        Complaints::where('id', $id)->update([
            'complaint_status' => $pending
        ]);
        FlaggedComplaints::where('id', $id)->delete();

        $complaint = Complaints::where('id', $id)->get();
        $code = implode('', $complaint->pluck('tracking_code')->toArray());
        $auth = Auth::user();
        Activites::create([
            'description' =>$auth->name.' restored flagged complaint, Complaint Tracking code:'. $code,
            'username' => $auth->name,
            'privilage' => implode(' ', $auth->roles->pluck('name')->toArray()),
            'status' => 'pending'


        ]);


        Session::flash('flash_message', 'Flagged complaint restored successfully!');
        return redirect(route('flagged'));
    }

    public function destroy($id)
    {
        $images = ComplaintUploads::where('complaint_id', $id)->get();
        foreach($images as $image){
            if(Storage::delete($image->filename)){
                Complaints::where('id', $id)->delete();
                FlaggedComplaints::where('id', $id)->delete();
            }
        }

        $auth = Auth::user();
        Activites::create([
            'description' =>$auth->name.'Deleted a flagged complaint',
            'username' => $auth->name,
            'privilage' => implode(' ', $auth->roles->pluck('name')->toArray()),
            'status' => 'pending'
        ]);

        Session::flash('flash_message', 'Complaint Deleted successfully');
        return redirect()->back();
    }
}
