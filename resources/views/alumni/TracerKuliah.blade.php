@extends('layouts.app')
@section('title', 'Tracer Kuliah')
@section('content-header')
Tracer Kuliah
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if($cekalumni == false)
        <form action="/{{auth()->user()->role}}/tracerkuliah/store" method="post">
        @else
        <form action="/{{auth()->user()->role}}/tracerkuliah/{{auth()->user()->id}}/update" method="post">
            @method('put')
        @endif
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="id_alumni" class="form-label">Nama Alumni</label>
                            <select name="nama_depan" class="form-control" id="">
                                <option value="{{auth()->user()->id}}">{{auth()->user()->nama_depan}}</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="id_alumni" class="form-label">Nama Alumni</label>
                            <select name="nama_belakang" class="form-control" id="">
                                <option value="{{auth()->user()->id}}">{{auth()->user()->nama_belakang}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_kampus" class="form-label">Nama Kampus</label>
                            <input type="text" id="tracer_kuliah_kampus" class="form-control" placeholder="Masukkan Nama Kampus" name="tracer_kuliah_kampus" value="{{$tracerkuliah->tracer_kuliah_kampus ?? ''}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_status" class="form-label">Status</label>
                            <select class="form-control" id="tracer_kuliah_status" name="tracer_kuliah_status" required>
                                <option value="" {{$tracerkuliah == 'null' ? 'selected' : ''}}>Pilih Status</option>
                                @if($tracerkuliah == null)
                                <option value="aktif">Aktif</option>
                                <option value="lulus">Lulus</option>
                                <option value="do">DO (Drop Out)</option>
                                @else
                                <option value="aktif" {{$tracerkuliah->tracer_kuliah_status == 'aktif' ? 'selected' : ''}}>Aktif</option>
                                <option value="lulus" {{$tracerkuliah->tracer_kuliah_status == 'lulus' ? 'selected' : ''}}>Lulus</option>
                                <option value="do" {{$tracerkuliah->tracer_kuliah_status == 'do' ? 'selected' : ''}}>DO (Drop Out)</option>
                                @endif
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jenjang" class="form-label">Jenjang Kuliah</label>
                            <select class="form-control" id="tracer_kuliah_jenjang" name="tracer_kuliah_jenjang" required>
                                <option value="" {{$tracerkuliah == 'null' ? 'selected' : ''}}>Pilih Jenjang Kuliah</option>
                                @if($tracerkuliah == null)
                                <option value="S1" >S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                @else
                                <option value="S1" {{$tracerkuliah->tracer_kuliah_jenjang == 'S1' ? 'selected' : ''}}>S1</option>
                                <option value="S2" {{$tracerkuliah->tracer_kuliah_jenjang == 'S3' ? 'selected' : ''}}>S2</option>
                                <option value="S3" {{$tracerkuliah->tracer_kuliah_jenjang == 'S3' ? 'selected' : ''}}>S3</option>
                                <option value="D1" {{$tracerkuliah->tracer_kuliah_jenjang == 'D1' ? 'selected' : ''}}>D1</option>
                                <option value="D2" {{$tracerkuliah->tracer_kuliah_jenjang == 'D2' ? 'selected' : ''}}>D2</option>
                                <option value="D3" {{$tracerkuliah->tracer_kuliah_jenjang == 'D3' ? 'selected' : ''}}>D3</option>
                                <option value="D4" {{$tracerkuliah->tracer_kuliah_jenjang == 'D4' ? 'selected' : ''}}>D4</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jurusan" class="form-label">Jurusan</label>
                            <input type="text" id="tracer_kuliah_jurusan" class="form-control" placeholder="Masukkan Jurusan"
                                name="tracer_kuliah_jurusan" value="{{$tracerkuliah->tracer_kuliah_jurusan ?? ''}}"required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_linier" class="form-label">Keselarasan Jurusan</label>
                            <select class="form-control" id="tracer_kuliah_linier" name="tracer_kuliah_linier" required>
                                <option value="" disabled selected>Pilih Keselarasan Jurusan</option>
                                @if($tracerkuliah == null)
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                                @else
                                <option value="ya"{{$tracerkuliah->tracer_kuliah_linier == 'ya' ? 'selected' : ''}}>Ya</option>
                                <option value="tidak"{{$tracerkuliah->tracer_kuliah_linier == 'tidak' ? 'selected' : ''}}>Tidak</option>
                                @endif

                            </select>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_alamat" class="form-label">Alamat Kampus</label>
                            <input type="text" id="tracer_kuliah_alamat" class="form-control" placeholder="Masukkan Alamat Kampus"
                                name="tracer_kuliah_alamat" value="{{$tracerkuliah->tracer_kuliah_alamat ?? ''}}"required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
    </div>
</div>
@endsection