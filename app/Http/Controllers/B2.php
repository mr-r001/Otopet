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
        // Hanya Input Calon dan Wakil
        // Tampilan Semua data berdasarkan Desa dan Jumlahkan
        // Tanggal Otomatis hari ini
        return view('admin.B2.show');
    }
}
