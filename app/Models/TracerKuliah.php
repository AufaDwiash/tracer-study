<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TracerKuliah extends Model
{
    protected $fillable = [
        'id_alumni',
        'tracer_kuliah_kampus',
        'tracer_kuliah_status',
        'tracer_kuliah_jenjang',
        'tracer_kuliah_jurusan',
        'tracer_kuliah_linier',
        'tracer_kuliah_alamat',
    ];
    
    public function alumni(){
        return $this->belongsTo(User::class, 'id_alumni');
    }
}
