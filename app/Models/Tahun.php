<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $fillable = [
        'tahun_lulus',
        'keterangan',
    ];
    
}