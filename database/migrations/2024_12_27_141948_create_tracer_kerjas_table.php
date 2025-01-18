<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracer_kerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_alumni');
            $table->string('tracer_kerja_pekerjaan', 50);
            $table->string('tracer_kerja_nama', 50);
            $table->string('tracer_kerja_jabatan', 50);
            $table->string('tracer_kerja_status', 50);
            $table->string('tracer_kerja_lokasi', 50);
            $table->string('tracer_kerja_alamat', 50);
            $table->date('tracer_kerja_tgl_mulai');
            $table->string('tracer_kerja_gaji', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracer_kerjas');
    }
};
