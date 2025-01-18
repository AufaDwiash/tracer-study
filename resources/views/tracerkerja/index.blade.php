@extends('layouts.app')
@section('title', 'Tracer Kerja')
@section('content-header')
Tracer Kerja
@endsection

@section('content')

<div class="col-md-2 mb-2">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah Data</button>
</div>
<div class="card">
    <div class="table-responsive text-nowrap m-2">
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Perusahaan</th>
                    <th>Pekerjaan</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($tracerkerja as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->alumni->nama_depan ?? '-'}} {{$item->alumni->nama_belakang ?? '-'}}</td>
                <td>{{ $item->tracer_kerja_nama }}</td>
                <td>{{ $item->tracer_kerja_pekerjaan }}</td>
                <td>{{ $item->tracer_kerja_jabatan }}</td>
                <td>{{ $item->tracer_kerja_status }}</td>
                <td>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#view{{$item->id}}">Lihat Detail</button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{ $item->id }}">Edit</button>
                    <a href="/{{ auth()->user()->role }}/tracerkerja/{{ $item->id }}/delete" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('tracerkerja.form') <!-- Form tambah -->
@include('tracerkerja.edit') <!-- Form edit -->
@include('tracerkerja.view')
@endsection
