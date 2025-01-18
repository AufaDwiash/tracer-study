<?php

namespace App\Http\Controllers;

use App\Models\KonsentrasiKeahlian;
use App\Models\ProgramKeahlian;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;


class KonsentrasiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Konsentrasi Keahlian and related Program Keahlian
        $konsentrasi_keahlian = KonsentrasiKeahlian::all();
        $program_keahlian = ProgramKeahlian::all();
        $bidang_keahlian = BidangKeahlian::all();
        $kode = $this->generatekode();

        // Pass data to the view
        return view('konsentrasi.index', compact('konsentrasi_keahlian', 'program_keahlian', 'bidang_keahlian' , 'kode'));
    }

    private function generatekode()
    {
       $cek = KonsentrasiKeahlian::count();
       if ($cek == 0){
        $kode = 'KK-' . '001';
       }
       else{
        $lastdata = KonsentrasiKeahlian::all()->last();
        $nomor_urut = (int)substr($lastdata->kode_konsentrasi_keahlian ,-3) +1;
        $nomor_urut_padded = str_pad($nomor_urut, 3, '0', STR_PAD_LEFT);
        $kode = 'KK-' . $nomor_urut_padded ;
       }
       return $kode;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $konsentrasi_keahlian = new KonsentrasiKeahlian();

        $konsentrasi_keahlian->id_program_keahlian = $request->id_program_keahlian;
        $konsentrasi_keahlian->kode_konsentrasi_keahlian = $this->generatekode();
        $konsentrasi_keahlian->konsentrasi_keahlian = $request->konsentrasi_keahlian;
        $konsentrasi_keahlian->save();

        // Redirect back with success message
        return  back()->with('sukses', 'Konsentrasi Keahlian berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input data
        $konsentrasi_keahlian = KonsentrasiKeahlian::find($id);

        $konsentrasi_keahlian->id_program_keahlian = $request->id_program_keahlian;
        $konsentrasi_keahlian->konsentrasi_keahlian = $request->konsentrasi_keahlian;
        $konsentrasi_keahlian->update();

        // Redirect back with success message
        return  back()->with('sukses', 'Konsentrasi Keahlian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete the Konsentrasi Keahlian
        $konsentrasi_keahlian = KonsentrasiKeahlian::find($id);
        $konsentrasi_keahlian->delete();

        // Redirect back with success message
        return  back()->with('sukses', 'Konsentrasi Keahlian berhasil dihapus.');
    }
}