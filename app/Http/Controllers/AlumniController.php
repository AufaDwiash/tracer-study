<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tahun;
use App\Models\KonsentrasiKeahlian;
use App\Models\StatusAlumni;

use Illuminate\Http\Request;
// use App\Models\Testimoni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = User::where('role', 'alumni')->get();
        $tahun = Tahun::all();
        $status = StatusAlumni::all();
        $konsentrasi_keahlian = KonsentrasiKeahlian::all();
        return view('alumni.index', compact('alumni', 'tahun', 'konsentrasi_keahlian', 'status'));
    }

    public function datapribadi()
    {
        $alumni = User::findOrFail(auth()->user()->id);
        $tahun = Tahun::all();
        $status = StatusAlumni::all();
        $konsentrasi_keahlian = KonsentrasiKeahlian::all();
        return view('alumni.datapribadi', compact('alumni', 'tahun', 'konsentrasi_keahlian', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = $this->cekEmail($request->email);

        $alumni = new User;
        $alumni->nisn = $request->nisn;
        $alumni->nik = $request->nik;
        $alumni->nama_depan = $request->nama_depan;
        $alumni->nama_belakang = $request->nama_belakang;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->no_hp = $request->no_hp;
        $alumni->akun_fb = $request->akun_fb;
        $alumni->akun_ig = $request->akun_ig;
        $alumni->akun_tiktok = $request->akun_tiktok;
        $alumni->email = $request->email;
        $alumni->password = bcrypt($request->password);
        $alumni->id_tahun_lulus = $request->id_tahun_lulus;
        $alumni->id_konsentrasi_keahlian = $request->id_konsentrasi_keahlian;
        $alumni->id_status_alumni = $request->id_status_alumni;
        $alumni->role = $role;
        $alumni->save();

        return  back()->with('sukses', 'Berhasil menambahkan data');
    }

    private function cekEmail($email)
    {
        if (strpos($email, '@admin.com') !== false) {
            return 'admin';
        } else {
            return 'alumni';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $alumni)
    {
        // return view('alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumni = User::find($id);
        $alumni->nisn = $request->nisn;
        $alumni->nik = $request->nik;
        $alumni->nama_depan = $request->nama_depan;
        $alumni->nama_belakang = $request->nama_belakang;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->tgl_lahir = $request->tgl_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->no_hp = $request->no_hp;
        $alumni->akun_fb = $request->akun_fb;
        $alumni->akun_ig = $request->akun_ig;
        $alumni->akun_tiktok = $request->akun_tiktok;
        $alumni->email = $request->email;
        $alumni->id_tahun_lulus = $request->id_tahun_lulus;
        $alumni->id_konsentrasi_keahlian = $request->id_konsentrasi_keahlian;
        $alumni->id_status_alumni = $request->id_status_alumni;
        $alumni->update();

        // if($alumni->id_status='1'){

            return redirect('/' . auth()->user()->role . '/alumni')->with('sukses', ' mengedit data,mohon isi data tracer');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumni = User::find($id);
        $alumni->delete();

        return  back()->with('sukses', 'Berhasil menghapus data');
    }
}
