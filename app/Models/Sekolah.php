<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = [
        'npsn',
        'nss',
        'nama_sekolah',
        'alamat',
        'no_telp',
        'website',
        'email',
    ];
    
}
