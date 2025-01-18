<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/sekolah/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <!-- NPSN -->
                        <div class="col mb-0">
                            <label for="npsn" class="form-label">NPSN</label>
                            <input type="text" id="npsn" class="form-control" placeholder="Masukkan NPSN" name="npsn" required>
                        </div>

                        <!-- NSS -->
                        <div class="col mb-0">
                            <label for="nss" class="form-label">NSS</label>
                            <input type="text" id="nss" class="form-control" placeholder="Masukkan NSS" name="nss" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nama Sekolah -->
                        <div class="col mb-0">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" id="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" name="nama_sekolah" required>
                        </div>

                        <!-- Alamat -->
                        <div class="col mb-0">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" class="form-control" placeholder="Masukkan Alamat" name="alamat" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nomor Telepon -->
                        <div class="col mb-0">
                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                            <input type="text" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon" name="no_telp" required>
                        </div>

                        <!-- Website -->
                        <div class="col mb-0">
                            <label for="website" class="form-label">Website</label>
                            <input type="url" id="website" class="form-control" placeholder="Masukkan URL Website" name="website" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Email -->
                        <div class="col mb-0">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email" name="email" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
