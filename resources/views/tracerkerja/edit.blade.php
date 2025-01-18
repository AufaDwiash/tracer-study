@foreach($tracerkerja as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Tracer Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{ auth()->user()->role }}/tracerkerja/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <!-- Nama Alumni -->
                    <div class="col mb-0">
                        <label for="id_alumni{{$item->id}}" class="form-label">Nama Alumni</label>
                        <select id="id_alumni{{$item->id}}" class="form-control" name="id_alumni" required>
                            <option value="">Pilih Alumni...</option>
                            @foreach($alumni as $alumnis)
                                <option value="{{ $alumnis->id }}" {{ $item->id_alumni == $alumnis->id_alumni ? 'selected' : '' }}>
                                    {{ $alumnis->nama_depan }} {{ $alumnis->nama_belakang }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Data Lain -->
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kerja_pekerjaan{{$item->id}}" class="form-label">Pekerjaan</label>
                            <input type="text" id="tracer_kerja_pekerjaan{{$item->id}}" class="form-control" 
                                name="tracer_kerja_pekerjaan" value="{{$item->tracer_kerja_pekerjaan}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kerja_nama{{$item->id}}" class="form-label">Nama Perusahaan</label>
                            <input type="text" id="tracer_kerja_nama{{$item->id}}" class="form-control" 
                                name="tracer_kerja_nama" value="{{$item->tracer_kerja_nama}}" required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <!-- Kolom Pertama -->
                        <div class="col mb-0">
                            <label for="jabatan{{$item->id}}" class="form-label">Jabatan</label>
                            <input type="text" id="jabatan{{$item->id}}" class="form-control" 
                                name="tracer_kerja_jabatan" value="{{$item->tracer_kerja_jabatan}}" required>
                        </div>
                        <!-- Kolom Kedua -->
                        <div class="col mb-0">
                            <label for="tracer_kerja_status{{$item->id}}" class="form-label">Status Alumni</label>
                            <select id="tracer_kerja_status{{$item->id}}" class="form-control" name="tracer_kerja_status" required>
                                <option value="">Pilih Status</option>
                                <option value="Tetap" {{$item->tracer_kerja_status == 'Tetap' ? 'selected' : ''}}>Tetap</option>
                                <option value="Kontrak" {{$item->tracer_kerja_status == 'Kontrak' ? 'selected' : ''}}>Kontrak</option>
                                <option value="Freelance" {{$item->tracer_kerja_status == 'Freelance' ? 'selected' : ''}}>Freelance</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="lokasi{{$item->id}}" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi{{$item->id}}" class="form-control" 
                                name="tracer_kerja_lokasi" value="{{$item->tracer_kerja_lokasi}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="alamat{{$item->id}}" class="form-label">Alamat</label>
                            <input type="text" id="alamat{{$item->id}}" class="form-control" 
                            name="tracer_kerja_alamat" value="{{$item->tracer_kerja_alamat}}" required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="tglMulai{{$item->id}}" class="form-label">Tanggal Mulai</label>
                            <input type="date" id="tglMulai{{$item->id}}" class="form-control" 
                                name="tracer_kerja_tgl_mulai" value="{{$item->tracer_kerja_tgl_mulai}}" required>
                        </div>
                        <div class="col mb-0">
                            <label for="gaji{{$item->id}}" class="form-label">Gaji</label>
                            <input type="text" id="gaji{{$item->id}}" class="form-control" 
                                name="tracer_kerja_gaji" value="{{$item->tracer_kerja_gaji}}" required>
                        </div>
                    </div>

                    <!-- Tambahkan Field Lain -->
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
