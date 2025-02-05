<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Pastikan User di-import

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimonis'; // Pastikan tabel sesuai dengan database
    protected $primaryKey = 'id_testimoni'; // Primary key tabel

    protected $fillable = [
        'id_alumni',
        'testimoni',
        'tgl_testimoni',
    ];

    // Relasi ke User (karena alumni disimpan di User)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_alumni', 'id'); 
    }
}