@foreach($tracerkuliah as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Tracer Kuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/tracerkuliah/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="id_alumni{{$item->id}}" class="form-label">Nama Alumni</label>
                            <select id="id_alumni{{$item->id}}" class="form-control" name="id_alumni" required>
                                @foreach($alumni as $alumnis)
                                    <option value="{{ $alumnis->id }}" {{ $item->id_alumni == $alumnis->id ? 'selected' : '' }}>
                                        {{ $alumnis->nama_depan }} {{ $alumnis->nama_belakang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_kampus{{$item->id}}" class="form-label">Nama Kampus</label>
                            <input type="text" id="tracer_kuliah_kampus{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_kampus" value="{{$item->tracer_kuliah_kampus}}" required>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_status{{$item->id}}" class="form-label">Status</label>
                            <input type="text" id="tracer_kuliah_status{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_status" value="{{$item->tracer_kuliah_status}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jenjang{{$item->id}}" class="form-label">Jenjang Pendidikan</label>
                            <input type="text" id="tracer_kuliah_jenjang{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_jenjang" value="{{$item->tracer_kuliah_jenjang}}" required>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jurusan{{$item->id}}" class="form-label">Jurusan</label>
                            <input type="text" id="tracer_kuliah_jurusan{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_jurusan" value="{{$item->tracer_kuliah_jurusan}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_linier{{$item->id}}" class="form-label">Keselarasan Jurusan</label>
                            <input type="text" id="tracer_kuliah_linier{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_linier" value="{{$item->tracer_kuliah_linier}}" required>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_alamat{{$item->id}}" class="form-label">Alamat Kampus</label>
                            <input type="text" id="tracer_kuliah_alamat{{$item->id}}" class="form-control" 
                                name="tracer_kuliah_alamat" value="{{$item->tracer_kuliah_alamat}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
