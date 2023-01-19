<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function report()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    
    public function create()
    {
        return view('users.create');
    }

    public function edit(reports $reports)
    {

        return view('users.edit', compact('user'));
    }
}
