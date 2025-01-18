<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TracerKerja extends Model
{
    protected $fillable = [
        'id_alumni',
        'tracer_kerja_pekerjaan',
        'tracer_kerja_nama',
        'tracer_kerja_jabatan',
        'tracer_kerja_status',
        'tracer_kerja_lokasi',
        'tracer_kerja_alamat',
        'tracer_kerja_tgl_mulai',
        'tracer_kerja_gaji',
    ];

    /**
     * Relasi ke tabel Alumni.
     */
    public function alumni()
    {
        return $this->belongsTo(User::class, 'id_alumni');
    }
}
