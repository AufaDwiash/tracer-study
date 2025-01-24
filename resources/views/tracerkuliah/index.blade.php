@extends('layouts.app')
@section('title', 'Tracer Kuliah')
@section('content-header')
Tracer Kuliah
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
                    <th>Nama Alumni</th>
                    <th>Nama Kampus</th>
                    <th>Status</th>
                    <th>Jenjang</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($tracerkuliah as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->alumni->nama_depan ?? '-'}} {{$item->alumni->nama_belakang ?? '-'}}</td>
                <td>{{$item->tracer_kuliah_kampus}}</td>
                <td>{{$item->tracer_kuliah_status}}</td>
                <td>{{$item->tracer_kuliah_jenjang}}</td>
                <td>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#view{{$item->id}}">Lihat Detail</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('tracerkuliah.view')
@endsection
