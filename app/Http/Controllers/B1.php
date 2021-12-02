<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B1 extends Controller
{
    public function index()
    {
        return view('admin.B1.index');
    }

    public function show($id)
    {
        return view('admin.B1.show');
    }
}
