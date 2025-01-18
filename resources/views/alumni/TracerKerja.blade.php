@extends('layouts.app')
@section('title', 'Tracer Kerja')
@section('content-header')
Tracer Kerja
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    @if($cekalumni == false)
        <form action="/{{auth()->user()->role}}/tracerkerja/store" method="post">
        @else
        <form action="/{{auth()->user()->role}}/tracerkerja/{{auth()->user()->id}}/update" method="post">
            @method('put')
        @endif
                    @csrf
                    <div class="row g-2">

                        <div class="col mb-0">
                                <label for="id_alumni" class="form-label">Nama Depan</label>
                                <select name="nama_depan" class="form-control" id="">
                                    <option value="{{auth()->user()->id}}">{{auth()->user()->nama_depan}}</option>
                                </select>
                            </div>
                            <div class="col mb-0">
                                <label for="id_alumni" class="form-label">Nama Belakang</label>
                                <select name="nama_belakang" class="form-control" id="">
                                    <option value="{{auth()->user()->id}}">{{auth()->user()->nama_belakang}}</option>
                                </select>
                            </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" id="pekerjaan" class="form-control" name="tracer_kerja_pekerjaan" placeholder="Masukkan Pekerjaan" value="{{$tracerkerja->tracer_kerja_pekerjaan ?? ''}}"required>
                        </div>
                        <div class="col mb-0">
                            <label for="nama" class="form-label">Nama Perusahaan</label>
                            <input type="text" id="nama" class="form-control" name="tracer_kerja_nama" placeholder="Masukkan Nama Perusahaan" value="{{$tracerkerja->tracer_kerja_nama ?? ''}}"required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" id="jabatan" class="form-control" name="tracer_kerja_jabatan" placeholder="Masukkan Jabatan" value="{{$tracerkerja->tracer_kerja_jabatan ?? ''}}"required>
                        </div>
                        <div class="col mb-0">
                            <label for="status" class="form-label">Status</label>
                            <select id="id_status_alumni" class="form-control" name="tracer_kerja_status">
                            <option value=""{{$tracerkerja == 'null' ? 'selected' : ''}}>Pilih status</option>
                            @if($tracerkerja == null)
                                <option value="tetap" >Tetap</option>
                                <option value="kontrak" >Kontrak</option>
                                <option value="freelace">Freelance</option>
                                @else
                                <option value="tetap" {{$tracerkerja->tracer_kerja_status == 'tetap' ? 'selected' : ''}}>Tetap</option>
                                <option value="kontrak" {{$tracerkerja->tracer_kerja_status == 'kontrak' ? 'selected' : ''}}>Kontrak</option>
                                <option value="freelace" {{$tracerkerja->tracer_kerja_status == 'freelace' ? 'selected' : ''}}>Freelance</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi" class="form-control" name="tracer_kerja_lokasi" placeholder="Masukkan Lokasi" value="{{$tracerkerja->tracer_kerja_lokasi ?? ''}}"required>
                        </div>
                        <div class="col mb-0">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="lokasi" class="form-control" name="tracer_kerja_alamat" placeholder="Masukkan Alamat" value="{{$tracerkerja->tracer_kerja_alamat ?? ''}}"required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="tglMulai" class="form-label">Tanggal Mulai</label>
                            <input type="date" id="tglMulai" class="form-control" name="tracer_kerja_tgl_mulai" value="{{$tracerkerja->tracer_kerja_tgl_mulai ?? ''}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" id="gaji" class="form-control" name="tracer_kerja_gaji" placeholder="Masukkan Gaji" value="{{$tracerkerja->tracer_kerja_gaji ?? ''}}"required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
    </div>
</div>
@endsection