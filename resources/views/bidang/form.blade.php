<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Bidang Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/bidang-keahlian/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="kodeBidangKeahlian" class="form-label">Kode Bidang Keahlian</label>
                            <input type="text" id="kodeBidangKeahlian" class="form-control" placeholder="Masukkan Kode"
                                name="kode_bidang_keahlian" value='{{$kode}}' readonly>
                        </div>
                        <div class="col mb-0">
                            <label for="bidangKeahlian" class="form-label">Bidang Keahlian</label>
                            <input type="text" id="bidangKeahlian" class="form-control" placeholder="Masukkan Bidang Keahlian"
                                name="bidang_keahlian" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>