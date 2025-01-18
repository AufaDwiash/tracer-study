<?php

namespace App\Http\Controllers;

use App\Models\TracerKerja;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StatusAlumni;


class TracerKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Tracer Kerja and related Alumni
        $tracerkerja = TracerKerja::all();
        $alumni = User::where('role','alumni')->get();
        $status = StatusAlumni::all();
    
        // Pass data to the view
        return view('tracerkerja.index', compact('tracerkerja', 'alumni' , 'status'));
    }

    public function alumnitracerkerja()
    {
        return view('alumni.TracerKerja');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new TracerKerja instance
        $tracerKerja = new TracerKerja();
        $tracerKerja->id_alumni = $request->id_alumni;
        $tracerKerja->tracer_kerja_pekerjaan = $request->tracer_kerja_pekerjaan;
        $tracerKerja->tracer_kerja_nama = $request->tracer_kerja_nama;
        $tracerKerja->tracer_kerja_jabatan = $request->tracer_kerja_jabatan;
        $tracerKerja->tracer_kerja_status = $request->tracer_kerja_status;
        $tracerKerja->tracer_kerja_lokasi = $request->tracer_kerja_lokasi;
        $tracerKerja->tracer_kerja_alamat = $request->tracer_kerja_alamat;
        $tracerKerja->tracer_kerja_tgl_mulai = $request->tracer_kerja_tgl_mulai;
        $tracerKerja->tracer_kerja_gaji = $request->tracer_kerja_gaji;
        $tracerKerja->save();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kerja berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // Find the existing TracerKerja record
        $tracerKerja = TracerKerja::findOrFail($id);

        // Update the fields
        $tracerKerja->id_alumni = $request->id_alumni;
        $tracerKerja->tracer_kerja_pekerjaan = $request->tracer_kerja_pekerjaan;
        $tracerKerja->tracer_kerja_nama = $request->tracer_kerja_nama;
        $tracerKerja->tracer_kerja_jabatan = $request->tracer_kerja_jabatan;
        $tracerKerja->tracer_kerja_status = $request->tracer_kerja_status;
        $tracerKerja->tracer_kerja_lokasi = $request->tracer_kerja_lokasi;
        $tracerKerja->tracer_kerja_alamat = $request->tracer_kerja_alamat;
        $tracerKerja->tracer_kerja_tgl_mulai = $request->tracer_kerja_tgl_mulai;
        $tracerKerja->tracer_kerja_gaji = $request->tracer_kerja_gaji;
        $tracerKerja->save();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kerja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the Tracer Kerja record
        $tracerKerja = TracerKerja::findOrFail($id);

        // Delete the record
        $tracerKerja->delete();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kerja berhasil dihapus.');
    }
}
