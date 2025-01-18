<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolah = Sekolah::all(); // Fetch all school records
        return view('sekolah.index', compact('sekolah')); // Return to the index view with data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $sekolah = new Sekolah();

    $sekolah->npsn = $request->npsn;
    $sekolah->nss = $request->nss;
    $sekolah->nama_sekolah = $request->nama_sekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->no_telp = $request->no_telp;
    $sekolah->website = $request->website;
    $sekolah->email = $request->email;
    $sekolah->save();

    // Redirect back with success message
    return  back()->with('sukses', 'Sekolah berhasil ditambahkan.');
}
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Cari data sekolah berdasarkan id
        $sekolah = Sekolah::findOrFail($id);
    
        // Perbarui data sekolah dengan input dari request
        $sekolah->npsn = $request->npsn;
        $sekolah->nss = $request->nss;
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->no_telp = $request->no_telp;
        $sekolah->website = $request->website;
        $sekolah->email = $request->email;
        $sekolah->save();
    
        // Redirect kembali dengan pesan sukses
        return  back()->with('sukses', 'Data sekolah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sekolah = sekolah::find($id);
        $sekolah->delete();

        return back()->with('success', 'Data Sekolah berhasil dihapus.');
    }
}
