<?php

namespace App\Http\Controllers;

use App\Models\StatusAlumni;
use Illuminate\Http\Request;

class StatusAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status=StatusAlumni::all();
        return view('status.index' , compact('status'));
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
        //
        $status=new StatusAlumni;
        $status->status=$request->status_alumni;
        $status->save();
        return  back()->with('sukses','Berhasil menambahkan data');        
    }

    /**
     * Display the specified resource.
     */
    public function show(StatusAlumni $statusAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StatusAlumni $statusAlumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $status=StatusAlumni::find($id);
        $status->status=$request->status_alumni;
        $status->update();
        return  back()->with('sukses','Berhasil mengedit data');      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {    
        $status=StatusAlumni::find($id);
        $status->delete();
        return  back()->with('sukses','Berhasil menghapus data'); 
    }
}
