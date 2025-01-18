<?php

namespace App\Http\Controllers;

use App\Models\BidangKeahlian;
use Illuminate\Http\Request;

class BidangKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang_keahlian = BidangKeahlian::all();
        $kode = $this->generatekode();
        return view('bidang.index', compact('bidang_keahlian', 'kode'));

    }

    private function generatekode()
    {
       $cek = BidangKeahlian::count();
       if ($cek == 0){
        $kode = 'BK-' . '001';
       }
       else{
        $lastdata = BidangKeahlian::all()->last();
        $nomor_urut = (int)substr($lastdata->kode_bidang_keahlian ,-3) +1;
        $nomor_urut_padded = str_pad($nomor_urut, 3, '0', STR_PAD_LEFT);
        $kode = 'BK-' . $nomor_urut_padded ;
       }
       return $kode;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bidangKeahlian = new BidangKeahlian;
        $bidangKeahlian->kode_bidang_keahlian = $this->generatekode();
        $bidangKeahlian->bidang_keahlian = $request->bidang_keahlian;
        $bidangKeahlian->save();
        return  back()->with('sukses', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(BidangKeahlian $bidangKeahlian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangKeahlian $bidangKeahlian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bidangKeahlian = BidangKeahlian::find($id);
        $bidangKeahlian->bidang_keahlian = $request->bidang_keahlian;
        $bidangKeahlian->update();
        return back()->with('sukses', 'Berhasil mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bidangKeahlian = BidangKeahlian::find($id);
        $bidangKeahlian->delete();
        return  back()->with('sukses', 'Berhasil menghapus data');
    }
    
}