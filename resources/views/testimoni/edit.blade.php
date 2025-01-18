@foreach($testimonis as $testimoni)
<div class="modal fade" id="formedit{{$testimoni->id_testimoni}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Testimoni Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/{{$item->id}}/testimoni/{{$testimoni->id_testimoni}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <!-- Alumni Dropdown -->
                        <div class="col mb-0">
                            <label for="idAlumni{{$testimoni->id_testimoni}}" class="form-label">Nama Alumni</label>
                            <select class="form-control" id="idAlumni{{$testimoni->id_testimoni}}" name="id_alumni" required>
                                @foreach($alumnis as $alumni)
                                <option value="{{$alumni->id_alumni}}" {{$testimoni->id_alumni == $alumni->id_alumni ? 'selected' : ''}}>
                                    {{$alumni->nama_depan}} {{$alumni->nama_belakang}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Isi Testimoni -->
                        <div class="col mb-0">
                            <label for="testimoni{{$testimoni->id_testimoni}}" class="form-label">Isi Testimoni</label>
                            <textarea id="testimoni{{$testimoni->id_testimoni}}" class="form-control" name="testimoni" rows="4" required>{{$testimoni->testimoni}}</textarea>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <!-- Tanggal Testimoni -->
                        <div class="col mb-0">
                            <label for="tglTestimoni{{$testimoni->id_testimoni}}" class="form-label">Tanggal Testimoni</label>
                            <input type="date" id="tglTestimoni{{$testimoni->id_testimoni}}" class="form-control" name="tgl_testimoni" value="{{$testimoni->tgl_testimoni}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
