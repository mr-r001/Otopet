<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B11 extends Controller
{
    public function index()
    {
        return view('admin.B11.index');
    }

    public function show($id)
    {
        return view('admin.B11.show');
    }
}
