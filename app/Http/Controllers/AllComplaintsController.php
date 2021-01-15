<?php

namespace App\Http\Controllers;
use App\Models\Complaints;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use App\Models\Activites;
use Illuminate\Support\Facades\DB;

class AllComplaintsController extends Controller
{
    public function index()
    {
        $complaints = DB::select('select * from complaints where not complaint_status = ?', ['flagged']);
        return view('admin.complaints.index')->with([
            'complaints' => $complaints,
        ]);
    }

}
