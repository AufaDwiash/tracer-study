@extends('layouts.app')
@section('title', 'Testimoni Alumni')
@section('content-header')
Testimoni Alumni
@endsection

@section('content')

<div class="col-md-2 mb-2">

</div>
<div class="card">
    <div class="table-responsive text-nowrap m-2">
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alumni</th>
                    <th>Tanggal Testimoni</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($testimonis as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->user->nama_depan ?? '' }} {{ $testimoni->user->nama_belakang ?? '' }}</td>
                        <td>{{$item->tgl_testimoni}}</td>
                        <td>
                            <a href="/{{auth()->user()->role}}/testimoni/{{$item->id}}/delete"
                                class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#view{{$item->id}}">View Testimoni</button>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('testimoni.form') 
@include('testimoni.edit') 
@include('testimoni.view') 
@endsection