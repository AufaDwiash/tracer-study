@extends('layouts.app')
@section('title', 'tahun lulus')
@section('content-header')
Tahun Lulus
@endsection

@section('content')

<div class="col-md-2 mb-2">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah Data</button>
</div>
<div class="card">
    <div class="table-responsive text-nowrap m-2">
        <table class="table"  id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tahun Lulus</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($tahun as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->tahun_lulus}}</td>
                <td>{{$item->keterangan}}</td>
                <td> 
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$item->id}}">Edit</button>
                    <a href="/{{auth()->user()->role}}/{{$item->id}}/tahun-lulus/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('tahun.form')
@include('tahun.edit')
@endsection
