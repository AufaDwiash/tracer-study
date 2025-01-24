@extends('layouts.app')
@section('title', 'alumni')
@section('content-header')
<div >
    <h4>
        <strong>
            Data Pribadi - {{$alumni->nama_depan}} {{$alumni->nama_belakang}}
        </strong>
    </h4>

    <h5>
        <p class="mt-10">Lengkapi data diri anda</p>
    </h5>

</div>
@endsection


@section('content')
<div class="row gy-0">
    <div class="card">
        <div class="card-body">
            <form action="/{{ auth()->user()->role }}/alumni/{{$alumni->id}}/update" method="post">
                @method('PUT')
                @csrf
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" id="nisn" class="form-control" placeholder="Masukkan NISN" name="nisn"
                            value="{{ $alumni->nisn ?? '' }}">
                    </div>
                    <div class="col mb-0">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" id="nik" class="form-control" placeholder="Masukkan NIK" name="nik"
                            value="{{ $alumni->nik ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="nama_depan" class="form-label">Nama Depan</label>
                        <input type="text" id="nama_depan" class="form-control" placeholder="Masukkan Nama Depan"
                            name="nama_depan" value="{{ $alumni->nama_depan ?? '' }}">
                    </div>
                    <div class="col mb-0">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <input type="text" id="nama_belakang" class="form-control" placeholder="Masukkan Nama Belakang"
                            name="nama_belakang" value="{{ $alumni->nama_belakang ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                            <option value="Laki-laki" {{ $alumni->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $alumni->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="col mb-0">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"
                            name="tempat_lahir" value="{{ $alumni->tempat_lahir ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir"
                            value="{{ $alumni->tgl_lahir ?? '' }}">
                    </div>
                    <div class="col mb-0">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" class="form-control" placeholder="Masukkan Alamat" name="alamat"
                            value="{{ $alumni->alamat ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="text" id="no_hp" class="form-control" placeholder="Masukkan Nomor HP" name="no_hp"
                            value="{{ $alumni->no_hp ?? '' }}">
                    </div>
                    <div class="col mb-0">
                        <label for="akun_fb" class="form-label">Akun Facebook</label>
                        <input type="text" id="akun_fb" class="form-control" placeholder="Masukkan Akun Facebook"
                            name="akun_fb" value="{{ $alumni->akun_fb ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="akun_ig" class="form-label">Akun Instagram</label>
                        <input type="text" id="akun_ig" class="form-control" placeholder="Masukkan Akun Instagram"
                            name="akun_ig" value="{{ $alumni->akun_ig ?? '' }}">
                    </div>
                    <div class="col mb-0">
                        <label for="akun_tiktok" class="form-label">Akun TikTok</label>
                        <input type="text" id="akun_tiktok" class="form-control" placeholder="Masukkan Akun TikTok"
                            name="akun_tiktok" value="{{ $alumni->akun_tiktok ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Masukkan Email" name="email"
                            value="{{ $alumni->email ?? '' }}">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="id_tahun_lulus" class="form-label">Tahun Lulus</label>
                        <select id="id_tahun_lulus" class="form-control" name="id_tahun_lulus">
                            <option value="">Pilih Tahun Lulus</option>
                            @foreach($tahun as $th)
                            <option value="{{ $th->id }}" {{ $alumni->id_tahun_lulus == $th->id ? 'selected' : '' }}>
                                {{ $th->tahun_lulus }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col mb-0">
                        <label for="id_konsentrasi_keahlian" class="form-label">Konsentrasi Keahlian</label>
                        <select id="id_konsentrasi_keahlian" class="form-control" name="id_konsentrasi_keahlian">
                            <option value="">Pilih Konsentrasi Keahlian</option>
                            @foreach($konsentrasi_keahlian as $konsentrasi)
                            <option value="{{ $konsentrasi->id }}" {{ $alumni->id_konsentrasi_keahlian == $konsentrasi->id ? 'selected' : '' }}>{{ $konsentrasi->konsentrasi_keahlian }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="id_status_alumni" class="form-label">Status Alumni</label>
                        <select id="id_status_alumni" class="form-control" name="id_status_alumni">
                            <option value="">Pilih Status Alumni</option>
                            @foreach($status as $st)
                            <option value="{{ $st->id }}" {{ $alumni->id_status_alumni == $st->id ? 'selected' : '' }}>
                                {{ $st->status }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
    
                <!-- Add similar value attributes for all other fields -->
                <button type="submit" class="btn btn-primary mt-2">Edit</button>
            </form>
        </div>
    </div>
</div>


@endsection