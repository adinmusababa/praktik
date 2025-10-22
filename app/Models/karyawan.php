<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'usia',
        'no_tlfn',
    ];
}
