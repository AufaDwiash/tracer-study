<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BidangKeahlianController;
use App\Http\Controllers\ProgramKeahlianController;
use App\Http\Controllers\KonsentrasiKeahlianController;
use App\Http\Controllers\StatusAlumniController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TracerKerjaController;
use App\Http\Controllers\TracerKuliahController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AlumniMiddleware;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LandingPageController;
use App\Models\TracerKerja;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::get('/logout', [AuthenticatedSessionController::class, 'logout']);
Route::post('/postlogin', [AuthenticatedSessionController::class, 'postlogin']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register/store', [RegisteredUserController::class, 'store']);


Route::middleware(['auth', 'AdminMiddleware'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index']);

    Route::get('admin/tahun-lulus', [TahunController::class, 'index']);
    Route::post('admin/tahun-lulus/store', [TahunController::class, 'store']);
    Route::get('admin/tahun-lulus/{id}/delete', [TahunController::class, 'destroy']);
    Route::put('admin/tahun-lulus/{id}/update', [TahunController::class, 'update']);

    Route::get('admin/alumni', [AlumniController::class, 'index']);
    Route::post('admin/alumni/store', [AlumniController::class, 'store']);
    Route::get('admin/alumni/{id}/delete', [AlumniController::class, 'destroy']);
    Route::put('admin/alumni/{id}/update', [AlumniController::class, 'update']);
    

    Route::get('admin/bidang-keahlian', [BidangKeahlianController::class, 'index']);
    Route::post('admin/bidang-keahlian/store', [BidangKeahlianController::class, 'store']);
    Route::get('admin/bidang-keahlian/{id}/delete', [BidangKeahlianController::class, 'destroy']);
    Route::put('admin/bidang-keahlian/{id}/update', [BidangKeahlianController::class, 'update']);

    Route::get('admin/program-keahlian', [ProgramKeahlianController::class, 'index']);
    Route::post('admin/program-keahlian/store', [ProgramKeahlianController::class, 'store']);
    Route::get('admin/program-keahlian/{id}/delete', [ProgramKeahlianController::class, 'destroy']);
    Route::put('admin/program-keahlian/{id}/update', [ProgramKeahlianController::class, 'update']);

    Route::get('admin/konsentrasi-keahlian', [KonsentrasiKeahlianController::class, 'index']);
    Route::post('admin/konsentrasi-keahlian/store', [KonsentrasiKeahlianController::class, 'store']);
    Route::get('admin/konsentrasi-keahlian/{id}/delete', [KonsentrasiKeahlianController::class, 'destroy']);
    Route::put('admin/konsentrasi-keahlian/{id}/update', [KonsentrasiKeahlianController::class, 'update']);

    Route::get('admin/status-alumni', [StatusAlumniController::class, 'index']);
    Route::post('admin/status-alumni/store', [StatusAlumniController::class, 'store']);
    Route::get('admin/status-alumni/{id}/delete', [StatusAlumniController::class, 'destroy']);
    Route::put('admin/status-alumni/{id}/update', [StatusAlumniController::class, 'update']);

    Route::get('admin/sekolah', [SekolahController::class, 'index']);
    Route::post('admin/sekolah/store', [SekolahController::class, 'store']);
    Route::get('admin/sekolah/{id}/delete', [SekolahController::class, 'destroy']);
    Route::put('admin/sekolah/{id}/update', [SekolahController::class, 'update']);

    Route::get('admin/testimoni', [TestimoniController::class, 'index']);
    Route::post('admin/testimoni/store', [TestimoniController::class, 'store']);
    Route::get('/admin/testimoni/{testimoni}/delete', [TestimoniController::class, 'destroy']);
    Route::put('admin/testimoni/{id}/update', [TestimoniController::class, 'update']);

    Route::get('admin/tracerkerja', [TracerKerjaController::class, 'index']);
    Route::post('admin/tracerkerja/store', [TracerKerjaController::class, 'store']);
    Route::get('admin/tracerkerja/{id}/delete', [TracerKerjaController::class, 'destroy']);
    Route::put('admin/tracerkerja/{id}/update', [TracerKerjaController::class, 'update']);

    Route::get('admin/tracerkuliah', [TracerKuliahController::class, 'index']);
    Route::post('admin/tracerkuliah/store', [TracerKuliahController::class, 'store']);
    Route::get('admin/tracerkuliah/{id}/delete', [TracerKuliahController::class, 'destroy']);
    Route::put('admin/tracerkuliah/{id}/update', [TracerKuliahController::class, 'update']);

});


Route::middleware(['auth', 'AlumniMiddleware'])->group(function () {
    Route::get('/alumni/dashboard', [DashboardController::class, 'index']);

    Route::get('alumni/tahun-lulus', [TahunController::class, 'index']);
    Route::put('alumni/tahun-lulus/{id}/update', [TahunController::class, 'update']);

    Route::get('alumni/alumni', [AlumniController::class, 'datapribadi']);
    Route::put('alumni/alumni/{id}/update', [AlumniController::class, 'update']);

    Route::get('alumni/testimoni', [TestimoniController::class, 'alumnitestimoni']);
    Route::post('alumni/testimoni/store', [TestimoniController::class, 'store']);

    Route::get('alumni/tracerkerja', [TracerKerjaController::class, 'alumnitracerkerja']);
    Route::post('alumni/tracerkerja/store', [TracerKerjaController::class, 'store']);
    
    Route::get('alumni/tracerkuliah', [TracerKuliahController::class, 'alumnitracerkuliah']);
    Route::post('alumni/tracerkuliah/store', [TracerKuliahController::class, 'store']);

});