<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\JobHead;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function getJobHeads()
    {
        $jobHeads = JobHead::where('status', 1)->get();
        return response()->json($jobHeads);
    }
    public function getAgencies(Request $request)
    {
    
        $data = Agency::find($request->id);
        return response()->json($data);
    }

}
