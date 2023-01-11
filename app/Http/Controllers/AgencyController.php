<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $agencies= Agency::all();
        return view('agencies.index', compact('agencies')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_code' => 'required|string|max:255|unique:agencies',
            'agency_type' => 'required|integer',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:agencies',
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
            
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->short_code = $request->short_code;
        $agency->agency_type = $request->agency_type;
        $agency->contact_person = $request->contact_person;
        $agency->email = $request->email;
        $agency->phone = $request->phone;
        $agency->address = $request->address;
        $agency->city = $request->city;
        $agency->country = $request->country;
        $agency->agency_commission = $request->agency_commission;
        $agency->vat = $request->vat;
        $agency->supplementary_vat = $request->supplementary_vat;
        $agency->vat_on = $request->vat_on;
        $agency->commission_on = $request->commission_on;
        $agency->save();
        return redirect()->route('agency');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agency= Agency::find($id);
        return view('agencies.view', compact('agency'));


        // $agencies= Agency::all();
        // return view('agencies.index', compact('agencies')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency= Agency::find($id);
        return view('agencies.edit', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
