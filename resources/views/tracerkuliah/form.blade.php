<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Tracer Kuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/tracerkuliah/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="id_alumni" class="form-label">Nama Alumni</label>
                            <select id="id_alumni" class="form-control" name="id_alumni" required>
                                <option value="">Pilih Alumni</option>
                                @foreach($alumni as $alumnis)
                                <option value="{{ $alumnis->id }}">{{ $alumnis->nama_depan }} {{ $alumnis->nama_belakang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_kampus" class="form-label">Nama Kampus</label>
                            <input type="text" id="tracer_kuliah_kampus" class="form-control" placeholder="Masukkan Nama Kampus"
                                name="tracer_kuliah_kampus" required>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_status" class="form-label">Status</label>
                            <select class="form-control" id="tracer_kuliah_status" name="tracer_kuliah_status" required>
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="lulus">Lulus</option>
                                <option value="do">DO (Drop Out)</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jenjang" class="form-label">Jenjang Kuliah</label>
                            <select class="form-control" id="tracer_kuliah_jenjang" name="tracer_kuliah_jenjang" required>
                                <option value="" disabled selected>Pilih Jenjang Kuliah</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_jurusan" class="form-label">Jurusan</label>
                            <input type="text" id="tracer_kuliah_jurusan" class="form-control" placeholder="Masukkan Jurusan"
                                name="tracer_kuliah_jurusan" required>
                        </div>
                        <div class="col mb-0">
                            <label for="tracer_kuliah_linier" class="form-label">Keselarasan Jurusan</label>
                            <select class="form-control" id="tracer_kuliah_linier" name="tracer_kuliah_linier" required>
                                <option value="" disabled selected>Pilih Keselarasan Jurusan</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col mb-0">
                            <label for="tracer_kuliah_alamat" class="form-label">Alamat Kampus</label>
                            <input type="text" id="tracer_kuliah_alamat" class="form-control" placeholder="Masukkan Alamat Kampus"
                                name="tracer_kuliah_alamat" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>