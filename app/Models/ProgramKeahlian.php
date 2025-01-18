<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BidangKeahlian;
use App\Models\KonsentrasiKeahlian;

class ProgramKeahlian extends Model
{
    protected $fillable = [
        'id_bidang_keahlian',
        'kode_program_keahlian',
        'program_keahlian',
    ];

    public function BidangKeahlian(){
        return $this->belongsTo(BidangKeahlian::class, 'id_bidang_keahlian');
    }

    public function KonsentrasiKeahlian(){
        return $this->hasMany(ProgramKeahlian::class);
    }
    
}
