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
        $today = date('d F Y');


        $params = [
            'date' => $today
        ];
        // Tampilan Semua data berdasarkan Desa dan Jumlahkan
        return view('admin.B2.show')->with($params);
    }
}
