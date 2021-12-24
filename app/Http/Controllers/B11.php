<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\KTP;
use App\Models\Province;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class B11 extends Controller
{
    public function index()
    {
        $params = [
            'ktp' => KTP::all(),
        ];
        $provinces = Province::orderBy('prov_name')->get();
        $cities = City::orderBy('city_name')->get();
        $districts = District::orderBy('dis_name')->get();
        $subdistricts = Subdistrict::orderBy('subdis_name')->get();
        return view('admin.B11.index', compact('provinces', 'cities', 'districts', 'subdistricts'))->with($params);
    }

    public function show($id)
    {
        $params = [
            'ktp' => KTP::with(['getProvince', 'getCity', 'getDistrict', 'getSubdistrict'])->get(),
            'province' => Province::all()
        ];

        // Pilih Provinsi sampai Desa, Show Pendukung dalam desa yg di pilih
        // Tanggal Otomatis hari ini
        return view('admin.B11.show')->with($params);
    }
}
