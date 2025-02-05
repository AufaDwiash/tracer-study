<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Tracer Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/tracerkerja/store" method="post">
                    @csrf
                    <div class="col mb-0">
                        <label for="nama" class="form-label">Nama</label>
                        <select class="form-control" id="alumni" name="id_alumni" required>
                            <option value="">Pilih Alumni</option>
                            @foreach($alumni as $alumnis)
                            <option value="{{$alumnis->id}}">{{$alumnis->nama_depan}} {{$alumnis->nama_belakang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" id="pekerjaan" class="form-control" name="tracer_kerja_pekerjaan" placeholder="Masukkan Pekerjaan" required>
                        </div>
                        <div class="col mb-0">
                            <label for="nama" class="form-label">Nama Perusahaan</label>
                            <input type="text" id="nama" class="form-control" name="tracer_kerja_nama" placeholder="Masukkan Nama Perusahaan" required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" id="jabatan" class="form-control" name="tracer_kerja_jabatan" placeholder="Masukkan Jabatan" required>
                        </div>
                        <div class="col mb-0">
                            <label for="status" class="form-label">Status</label>
                            <select id="id_status_alumni" class="form-control" name="tracer_kerja_status">
                            <option value="">Pilh Status</option>
                                <option >Tetap</option>
                                <option >Kontrak</option>
                                <option >Freelance</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi" class="form-control" name="tracer_kerja_lokasi" placeholder="Masukkan Lokasi" required>
                        </div>
                        <div class="col mb-0">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="lokasi" class="form-control" name="tracer_kerja_alamat" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="tglMulai" class="form-label">Tanggal Mulai</label>
                            <input type="date" id="tglMulai" class="form-control" name="tracer_kerja_tgl_mulai" required>
                        </div>
                        <div class="col mb-0">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" id="gaji" class="form-control" name="tracer_kerja_gaji" placeholder="Masukkan Gaji IDR atau Dolar" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
