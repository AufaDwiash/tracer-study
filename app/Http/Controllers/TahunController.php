<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahun=Tahun::all();
        return view('tahun.index',compact('tahun'));
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
        $tahun=new Tahun;
        $tahun->tahun_lulus=$request->tahun_lulus;
        $tahun->keterangan=$request->keterangan;
        $tahun->save();
        return  back()->with('sukses','Berhasil menambahkan data');        
    }

    /**
     * Display the specified resource.
     */
    public function show(Tahun $tahun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tahun $tahun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id )
    {
        $tahun=Tahun::find($id);
        $tahun->tahun_lulus=$request->tahun_lulus;
        $tahun->keterangan=$request->keterangan;
        $tahun->update();
        return  back()->with('sukses','Berhasil mengedit data');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $tahun=Tahun::find($id);
      $tahun->delete();
      return  back()->with('sukses','Berhasil menghapus data');        
    }
}
