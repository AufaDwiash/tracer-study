<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramKeahlian;

class KonsentrasiKeahlian extends Model
{
    protected $fillable = [
        'id_program_keahlian',
        'kode_konsentrasi_keahlian',
        'konsentrasi_keahlian',
    ];

    public function ProgramKeahlian(){
        return $this->belongsTo(ProgramKeahlian::class, 'id_program_keahlian');
    }
    
}
