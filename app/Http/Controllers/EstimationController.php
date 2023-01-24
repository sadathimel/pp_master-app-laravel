<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Estimation;
use Illuminate\Http\Request;

class EstimationController extends Controller
{
    public function index()
    {
        $agencies = Agency::all();
        $estimation = Estimation::all();
        return view('estimations.index',compact('estimation','agencies'));
    }

    public function create()
    {
        $agency_names= Agency::pluck('name','id');
        return view('estimations.create',compact('agency_names'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_code' => 'required|string|max:255|unique:estimations',
            'agency_type' => 'required|integer',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:estimations',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'agency_commission' => 'required|numeric',
            'vat' => 'required|numeric',
            'supplementary_vat' => 'required|numeric',
            'vat_on' => 'required|integer',
            'commission_on' => 'required|integer',  
        ]);
            
        $estimation = new Estimation();
        $estimation->name = $request->name;
        $estimation->short_code = $request->short_code;
        $estimation->agency_type = $request->agency_type;
        $estimation->contact_person = $request->contact_person;
        $estimation->email = $request->email;
        $estimation->phone = $request->phone;
        $estimation->address = $request->address;
        $estimation->city = $request->city;
        $estimation->country = $request->country;
        $estimation->agency_commission = $request->agency_commission;
        $estimation->vat = $request->vat;
        $estimation->supplementary_vat = $request->supplementary_vat;
        $estimation->vat_on = $request->vat_on;
        $estimation->commission_on = $request->commission_on;
        $estimation->save();
        return redirect()->route('estimations.index');
    }


    public function show($id)
    {
        $estimation = Estimation::find($id);
        return view('estimations.show',compact('estimation'));
    }

    public function edit($id)
    {
        $estimation = Estimation::find($id);
        return view('estimations.edit',compact('estimation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_code' => 'required|string|max:255|unique:estimations',
            'agency_type' => 'required|integer',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:estimations',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'agency_commission' => 'required|numeric',
            'vat' => 'required|numeric',
            'supplementary_vat' => 'required|numeric',
            'vat_on' => 'required|integer',
            'commission_on' => 'required|integer',  
        ]);
            
        $estimation = Estimation::find($id);
        $estimation->name = $request->name;
        $estimation->short_code = $request->short_code;
        $estimation->agency_type = $request->agency_type;
        $estimation->contact_person = $request->contact_person;
        $estimation->email = $request->email;
        $estimation->phone = $request->phone;
        $estimation->address = $request->address;
        $estimation->city = $request->city;
        $estimation->country = $request->country;
        $estimation->agency_commission = $request->agency_commission;
        $estimation->vat = $request->vat;
        $estimation->supplementary_vat = $request->supplementary_vat;
        $estimation->vat_on = $request->vat_on;
        $estimation->commission_on = $request->commission_on;
        $estimation->save();
        return redirect()->route('estimations.index');
    }

    public function destroy($id)
    {
        $estimation = Estimation::find($id);
        $estimation->delete();
        return redirect()->route('estimations.index');
    }

    public function getEstimation(Request $request)
    {
        $estimation = Estimation::find($request->id);
        return response()->json($estimation);
    }

    public function getEstimationByShortCode(Request $request)
    {
        $estimation = Estimation::where('short_code',$request->short_code)->first();
        return response()->json($estimation);
    }

    public function getEstimationByShortCodeForEdit(Request $request)
    {
        $estimation = Estimation::where('short_code',$request->short_code)->where('id','!=',$request->id)->first();
        return response()->json($estimation);
    }


}
