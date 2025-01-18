@foreach($sekolah as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/{{$item->id}}/sekolah/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <!-- NPSN -->
                        <div class="col mb-0">
                            <label for="npsn{{$item->id}}" class="form-label">NPSN</label>
                            <input type="text" id="npsn{{$item->id}}" class="form-control" name="npsn" 
                                value="{{$item->npsn}}" required>
                        </div>

                        <!-- NSS -->
                        <div class="col mb-0">
                            <label for="nss{{$item->id}}" class="form-label">NSS</label>
                            <input type="text" id="nss{{$item->id}}" class="form-control" name="nss" 
                                value="{{$item->nss}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nama Sekolah -->
                        <div class="col mb-0">
                            <label for="namaSekolah{{$item->id}}" class="form-label">Nama Sekolah</label>
                            <input type="text" id="namaSekolah{{$item->id}}" class="form-control" name="nama_sekolah" 
                                value="{{$item->nama_sekolah}}" required>
                        </div>

                        <!-- Alamat -->
                        <div class="col mb-0">
                            <label for="alamat{{$item->id}}" class="form-label">Alamat</label>
                            <input type="text" id="alamat{{$item->id}}" class="form-control" name="alamat" 
                                value="{{$item->alamat}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Nomor Telepon -->
                        <div class="col mb-0">
                            <label for="noTelp{{$item->id}}" class="form-label">Nomor Telepon</label>
                            <input type="text" id="noTelp{{$item->id}}" class="form-control" name="no_telp" 
                                value="{{$item->no_telp}}" required>
                        </div>

                        <!-- Website -->
                        <div class="col mb-0">
                            <label for="website{{$item->id}}" class="form-label">Website</label>
                            <input type="url" id="website{{$item->id}}" class="form-control" name="website" 
                                value="{{$item->website}}" required>
                        </div>
                    </div>
                    
                    <div class="row g-2 mt-2">
                        <!-- Email -->
                        <div class="col mb-0">
                            <label for="email{{$item->id}}" class="form-label">Email</label>
                            <input type="email" id="email{{$item->id}}" class="form-control" name="email" 
                                value="{{$item->email}}" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
