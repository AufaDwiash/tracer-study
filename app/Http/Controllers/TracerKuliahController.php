<?php

namespace App\Http\Controllers;

use App\Models\TracerKuliah;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TracerKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Tracer Kuliah and related Alumni
        $tracerkuliah = TracerKuliah::all();
        $alumni = User::all();

        // Pass data to the view
        return view('tracerkuliah.index', compact('tracerkuliah', 'alumni'));
    }

    public function alumnitracerkuliah()
    {
        $cekalumni = TracerKuliah::where('id_alumni', Auth::user()->id)->exists();
        $tracerkuliah = TracerKuliah::where('id_alumni', Auth::user()->id)->first();

        return view('alumni.TracerKuliah', compact('tracerkuliah', 'cekalumni'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tracer_kuliah_jenjang' => 'required|string',
            'tracer_kuliah_linier' => 'required|string',
            'tracer_kuliah_status' => 'required|string',
            // Validasi lainnya...
        ]);

        // Create a new TracerKuliah instance
        $tracerKuliah = new TracerKuliah();
        $tracerKuliah->id_alumni = $user = Auth::user()->id;
        $tracerKuliah->tracer_kuliah_kampus = $request->tracer_kuliah_kampus;
        $tracerKuliah->tracer_kuliah_status = $request->tracer_kuliah_status;
        $tracerKuliah->tracer_kuliah_jenjang = $request->tracer_kuliah_jenjang;
        $tracerKuliah->tracer_kuliah_jurusan = $request->tracer_kuliah_jurusan;
        $tracerKuliah->tracer_kuliah_linier = $request->tracer_kuliah_linier;
        $tracerKuliah->tracer_kuliah_alamat = $request->tracer_kuliah_alamat;
        $tracerKuliah->save();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kuliah berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       

        // Find the existing TracerKuliah record
        $tracerKuliah = TracerKuliah::where('id_alumni' , $id)->first();

        // Update the fields
        $tracerKuliah->id_alumni = $user = Auth::user()->id;
        $tracerKuliah->tracer_kuliah_kampus = $request->tracer_kuliah_kampus;
        $tracerKuliah->tracer_kuliah_status = $request->tracer_kuliah_status;
        $tracerKuliah->tracer_kuliah_jenjang = $request->tracer_kuliah_jenjang;
        $tracerKuliah->tracer_kuliah_jurusan = $request->tracer_kuliah_jurusan;
        $tracerKuliah->tracer_kuliah_linier = $request->tracer_kuliah_linier;
        $tracerKuliah->tracer_kuliah_alamat = $request->tracer_kuliah_alamat;
        $tracerKuliah->save();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the Tracer Kuliah record
        $tracerKuliah = TracerKuliah::findOrFail($id);

        // Delete the record
        $tracerKuliah->delete();

        // Redirect back with success message
        return back()->with('sukses', 'Tracer Kuliah berhasil dihapus.');
    }
}
