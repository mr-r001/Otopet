<?php

namespace App\Http\Controllers;

use App\Models\KTP;
use App\Models\Province;
use Illuminate\Http\Request;

class B11 extends Controller
{
    public function index()
    {
        $params = [
            'ktp' => KTP::all()
        ];
        return view('admin.B11.index')->with($params);
    }

    public function show($id)
    {
        $params = [
            'ktp' => KTP::with(['getProvince', 'getCity', 'getDistrict', 'getSubdistrict'])->get(),
            'province' => Province::all()
        ];
        return view('admin.B11.show')->with($params);
    }
}
