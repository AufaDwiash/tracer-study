@extends('layouts.app')
@section('title', 'Testimoni')
@section('content-header')
Testimoni
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/{{ auth()->user()->role }}/testimoni/store" method="post">
            @csrf
            <div class="row g-2">
                <div class="col mb-0">
                    <label for="testimoni" class="form-label">Testimoni</label>
                    <textarea name="testimoni" class="form-control" placeholder="Masukkan Testimoni Ceritakan Pengalaman Selama Pendidikan" id=""></textarea>
                </div>
            </div>
            <!-- Add similar value attributes for all other fields -->
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
        </form>
    </div>
</div>
@endsection