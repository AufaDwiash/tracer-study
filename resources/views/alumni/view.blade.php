@foreach($alumni as $item)
<div class="modal fade" id="view{{ $item->id }}" tabindex="-1" aria-labelledby="viewLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-5 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-info text-white rounded-top-5">
                <h5 class="modal-title fw-bold" id="viewLabel{{ $item->id }}">
                    <i class="fas fa-user-graduate me-2"></i> Detail Alumni - {{ $item->nama_depan }} {{ $item->nama_belakang }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4">
                <!-- Informasi Pribadi -->
                <section class="mb-4">
                    <h6 class="text-primary fw-bold mb-3 border-bottom pb-2">
                        <i class="fas fa-user-circle me-2"></i>Informasi Pribadi
                    </h6>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>NISN:</strong> {{ $item->nisn }}</li>
                                <li class="list-group-item"><strong>NIK:</strong> {{ $item->nik }}</li>
                                <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $item->nama_depan }} {{ $item->nama_belakang }}</li>
                                <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $item->jenis_kelamin }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Tempat Lahir:</strong> {{ $item->tempat_lahir }}</li>
                                <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $item->tgl_lahir }}</li>
                                <li class="list-group-item"><strong>Alamat:</strong> {{ $item->alamat }}</li>
                                <li class="list-group-item"><strong>No. HP:</strong> {{ $item->no_hp }}</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Akun Media Sosial -->
                <section class="mb-4">
                    <h6 class="text-warning fw-bold mb-3 border-bottom pb-2">
                        <i class="fas fa-share-alt me-2"></i>Akun Media Sosial
                    </h6>
                    <div class="card border-0 shadow-sm p-3">
                        <p class="mb-1"><strong>Facebook:</strong> {{ $item->akun_fb ?? '-' }}</p>
                        <p class="mb-1"><strong>Instagram:</strong> {{ $item->akun_ig ?? '-' }}</p>
                        <p class="mb-0"><strong>TikTok:</strong> {{ $item->akun_tiktok ?? '-' }}</p>
                    </div>
                </section>

                <!-- Informasi Akademik -->
                <section class="mb-4">
                    <h6 class="text-success fw-bold mb-3 border-bottom pb-2">
                        <i class="fas fa-graduation-cap me-2"></i>Informasi Akademik
                    </h6>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Tahun Lulus:</strong> {{ $item->tahun->tahun_lulus ?? '-' }}</li>
                                <li class="list-group-item"><strong>Konsentrasi Keahlian:</strong> {{ $item->konsentrasi->konsentrasi_keahlian ?? '-' }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Status Alumni:</strong> {{ $item->status->status ?? '-' }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $item->email }}</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer bg-light rounded-bottom-5">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i> Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach