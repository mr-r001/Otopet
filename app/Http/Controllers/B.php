<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class B extends Controller
{
    public function index()
    {
        return view('admin.B.index');
    }

    public function show($id)
    {
        return view('admin.B.show');
    }
}
