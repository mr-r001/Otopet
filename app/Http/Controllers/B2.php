<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B2 extends Controller
{
    public function index()
    {
        return view('admin.B2.index');
    }

    public function show($id)
    {
        return view('admin.B2.show');
    }
}
