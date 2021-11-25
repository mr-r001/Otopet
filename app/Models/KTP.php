<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KTP extends Model
{
    protected $fillable = [
        'provinsi',
        'kabupaten',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'status_perkawinan',
        'keterangan',
        'photo',
    ];
}
