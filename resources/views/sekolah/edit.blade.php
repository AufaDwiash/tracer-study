@foreach($sekolah as $item)
<div class="modal fade" id="formedit{{$sekolah->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/sekolah/{{$sekolah->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <!-- NPSN -->
                        <div class="col mb-0">
                            <label for="npsn{{$sekolah->id}}" class="form-label">NPSN</label>
                            <input type="text" id="npsn{{$sekolah->id}}" class="form-control" name="npsn" 
                                value="{{$sekolah->npsn}}" required>
                        </div>

                        <!-- NSS -->
                        <div class="col mb-0">
                            <label for="nss{{$sekolah->id}}" class="form-label">NSS</label>
                            <input type="text" id="nss{{$sekolah->id}}" class="form-control" name="nss" 
                                value="{{$sekolah->nss}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nama Sekolah -->
                        <div class="col mb-0">
                            <label for="namaSekolah{{$sekolah->id}}" class="form-label">Nama Sekolah</label>
                            <input type="text" id="namaSekolah{{$sekolah->id}}" class="form-control" name="nama_sekolah" 
                                value="{{$sekolah->nama_sekolah}}" required>
                        </div>

                        <!-- Alamat -->
                        <div class="col mb-0">
                            <label for="alamat{{$sekolah->id}}" class="form-label">Alamat</label>
                            <input type="text" id="alamat{{$sekolah->id}}" class="form-control" name="alamat" 
                                value="{{$sekolah->alamat}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nomor Telepon -->
                        <div class="col mb-0">
                            <label for="noTelp{{$sekolah->id}}" class="form-label">Nomor Telepon</label>
                            <input type="text" id="noTelp{{$sekolah->id}}" class="form-control" name="no_telp" 
                                value="{{$sekolah->no_telp}}" required>
                        </div>

                        <!-- Website -->
                        <div class="col mb-0">
                            <label for="website{{$sekolah->id}}" class="form-label">Website</label>
                            <input type="url" id="website{{$sekolah->id}}" class="form-control" name="website" 
                                value="{{$sekolah->website}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Email -->
                        <div class="col mb-0">
                            <label for="email{{$sekolah->id}}" class="form-label">Email</label>
                            <input type="email" id="email{{$sekolah->id}}" class="form-control" name="email" 
                                value="{{$sekolah->email}}" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
