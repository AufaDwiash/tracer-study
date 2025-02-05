<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Tahun;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_tahun_lulus',
        'id_konsentrasi_keahlian',
        'id_status_alumni',
        'nisn',
        'nik',
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_hp',
        'akun_fb',
        'akun_ig',
        'akun_tiktok',
        'email',
        'password',
        'status_login',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun_lulus');
    }
    public function konsentrasi()
    {
        return $this->belongsTo(KonsentrasiKeahlian::class, 'id_konsentrasi_keahlian');
    }
    public function status()
    {
        return $this->belongsTo(StatusAlumni::class, 'id_status_alumni');
    }
    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'id_alumni', 'id_alumni');
    }
}