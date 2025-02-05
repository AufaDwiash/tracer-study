<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk user admin
        DB::table('users')->insert([
            'nama_depan' => 'Admin',
            'nama_belakang' => 'Tracer',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Seeder untuk tabel tbl_sekolah
        DB::table('sekolahs')->insert([
            [
                'npsn' => '20501717',
                'nss' => '324050202006',
                'nama_sekolah' => 'SMKS Antartika 1 Sidoarjo',
                'alamat' => 'Jl.Siwalanpanji, Kec. Buduran Sidoarjo, Indonesia',
                'no_telp' => '+6231-8962851',
                'website' => ' https://www.smkantartika1sda.sch.id/',
                'email' => ' smks.antartika1.sda@gmail.com',
            ],
        ]);
    }
}
