<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Testimoni extends Model
{
    protected $fillable = [
        'id_alumni',
        'testimoni',
        'tgl_testimoni',
    ];

    public function alumni(){
        return $this->belongsTo(User::class, 'id_alumni');
    }
    
}
