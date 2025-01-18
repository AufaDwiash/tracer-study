<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Program Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/program-keahlian/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="idBidangKeahlian" class="form-label">Bidang Keahlian</label>
                            <select class="form-control" id="idBidangKeahlian" name="id_bidang_keahlian" required>
                                <option value="">Pilih Bidang Keahlian</option>
                                @foreach($bidang_keahlian as $bidang)
                                <option value="{{$bidang->id}}">{{$bidang->bidang_keahlian}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="kodeProgramKeahlian" class="form-label">Kode Program Keahlian</label>
                            <input type="text" id="kodeProgramKeahlian" class="form-control" placeholder="Masukkan Kode"
                                name="kode_program_keahlian" value='{{$kode}}' disabled>
                        </div>
                        <div class="col mb-0">
                            <label for="programKeahlian" class="form-label">Program Keahlian</label>
                            <input type="text" id="programKeahlian" class="form-control" placeholder="Masukkan Program Keahlian"
                                name="program_keahlian" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>