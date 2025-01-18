<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Testimoni Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/testimoni/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <!-- Alumni Dropdown -->
                        <div class="col mb-0">
                            <label for="alumni" class="form-label">Nama Alumni</label>
                            <select class="form-control" id="alumni" name="id_alumni" required>
                                <option value="">Pilih Alumni</option>
                                @foreach($alumnis as $alumni)
                                <option value="{{$alumni->id_alumni}}">{{$alumni->nama_depan}} {{$alumni->nama_belakang}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Isi Testimoni -->
                        <div class="col mb-0">
                            <label for="testimoni" class="form-label">Isi Testimoni</label>
                            <textarea id="testimoni" class="form-control" placeholder="Masukkan Testimoni" name="testimoni" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="row g-2 mt-2">
                        <!-- Tanggal Testimoni -->
                        <div class="col mb-0">
                            <label for="tgl_testimoni" class="form-label">Tanggal Testimoni</label>
                            <input type="date" id="tgl_testimoni" class="form-control" name="tgl_testimoni" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
