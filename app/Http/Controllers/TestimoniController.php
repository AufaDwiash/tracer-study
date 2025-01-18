<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Testimoni and related Alumni
        $testimonis = Testimoni::all();
        $alumnis = User::all();

        // Pass data to the view
        return view('testimoni.index', compact('testimonis', 'alumnis'));
    }

    public function alumnitestimoni()
    {
        return view('alumni.Testimoni');
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
        $tanggal = Carbon::now();
        $tgl_testimoni = $tanggal->year . '-' . $tanggal->month . '-' . $tanggal->day;
        // Create a new Testimoni instance
        $testimoni = new Testimoni;
        $testimoni->id_alumni = auth()->user()->id;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->tgl_testimoni = $tgl_testimoni;
        $testimoni->save();

        // Redirect back with success message
        return back()->with('sukses', 'Testimoni berhasil terkirim.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'id_alumni' => 'required|exists:tbl_alumni,id_alumni',
            'testimoni' => 'required|string',
            'tgl_testimoni' => 'required|date',
        ]);

        // Find the existing Testimoni record
        $testimoni = Testimoni::findOrFail($id);

        // Update the fields
        $testimoni->id_alumni = $request->id_alumni;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->tgl_testimoni = $request->tgl_testimoni;
        $testimoni->save();

        // Redirect back with success message
        return back()->with('sukses', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
{
    // Delete the Testimoni
    $testimoni->delete();

    // Redirect back with success message
    return back()->with('sukses', 'Testimoni berhasil dihapus.');
}

}
