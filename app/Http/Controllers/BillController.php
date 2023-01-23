<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // public function index()
    // {
    //     return view('bill.index');
    // }


    public function index()
    {
        $bill = Bill::all();
        return view('bills.index',compact('bill'));
    }
}
