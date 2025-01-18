<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramKeahlian;

class BidangKeahlian extends Model
{
    protected $fillable = [
        'kode_bidang_keahlian',
        'bidang_keahlian',
    ];

    public function ProgramKeahlian(){
        return $this->hasMany(ProgramKeahlian::class);
    }
}
