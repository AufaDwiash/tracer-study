<?php

namespace App\Http\Controllers;

use App\Models\ProgramKeahlian;
use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class ProgramKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program_keahlian = ProgramKeahlian::all();
        $bidang_keahlian = BidangKeahlian::all();
        $kode = $this->generatekode();

        return view('program.index', compact('program_keahlian', 'bidang_keahlian' , 'kode'));
    }

    private function generatekode()
    {
       $cek = ProgramKeahlian::count();
       if ($cek == 0){
        $kode = 'PK-' . '001';
       }
       else{
        $lastdata = ProgramKeahlian::all()->last();
        $nomor_urut = (int)substr($lastdata->kode_program_keahlian ,-3) +1;
        $nomor_urut_padded = str_pad($nomor_urut, 3, '0', STR_PAD_LEFT);
        $kode = 'PK-' . $nomor_urut_padded ;
       }
       return $kode;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $programKeahlian = new ProgramKeahlian;
        $programKeahlian->id_bidang_keahlian = $request->id_bidang_keahlian;
        $programKeahlian->kode_program_keahlian = $this->generatekode();
        $programKeahlian->program_keahlian = $request->program_keahlian;
        $programKeahlian->save();

        return  back()->with('sukses', 'Berhasil menambahkan data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $programKeahlian = ProgramKeahlian::find($id);
        $programKeahlian->id_bidang_keahlian = $request->id_bidang_keahlian;
        $programKeahlian->program_keahlian = $request->program_keahlian;
        $programKeahlian->update();

        return  back()->with('sukses', 'Berhasil mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $programKeahlian = ProgramKeahlian::find($id);
        $programKeahlian->delete();

        return  back()->with('sukses', 'Berhasil menghapus data');
    }
}