<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'jam_masuk',
        'jam_keluar',
        'materi',
        'tugas',
        'jumlahmhs_hadir',
        'jumlahmhs_tdkhadir',
        'gambar',
    ];
}
