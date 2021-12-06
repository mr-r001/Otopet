<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KTP extends Model
{
    protected $fillable = [
        'prov_id',
        'city_id',
        'dis_id',
        'subdis_id',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'status_perkawinan',
        'keterangan',
        'photo',
    ];
}
