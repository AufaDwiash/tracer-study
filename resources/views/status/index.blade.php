@extends('layouts.app')
@section('title', 'status alumni')
@section('content-header')
Status Alumni
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
                    <th>Status Alumni</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($status as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->status}}</td>
                <td> 
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$item->id}}">Edit</button>
                    <a href="/{{auth()->user()->role}}/status-alumni/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('status.form')
@include('status.edit')
@endsection
