@foreach($tracerkerja as $item)
<div class="modal fade" id="view{{ $item->id }}" tabindex="-1" aria-labelledby="viewLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-5 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header bg-gradient-info text-white rounded-top-5">
                <h5 class="modal-title fw-bold" id="viewLabel{{ $item->id }}">
                    <i class="fas fa-user-graduate me-2"></i> Detail Tracer Kerja - {{ $item->alumni->nama_depan ?? '-' }} {{ $item->alumni->nama_belakang ?? '-' }}
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
                            <li class="list-group-item"><strong>NISN:</strong> {{ $item->alumni->nisn ?? '-'}}</li>
                                <li class="list-group-item"><strong>NIK:</strong> {{ $item->alumni->nik ?? '-'}}</li>
                                <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $item->alumni->nama_depan ?? '-'}} {{ $item->alumni->nama_belakang ?? '-'}}</li>
                                <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $item->alumni->jenis_kelamin ?? '-'}}</li>
                            </ul>
                        </div>

                    </div>
                </section>

                <!-- Informasi Tracer Kerja -->
                <section class="mb-4">
                    <h6 class="text-primary fw-bold mb-3 border-bottom pb-2">
                        <i class="fas fa-briefcase me-2"></i>Informasi Tracer Kerja
                    </h6>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Pekerjaan:</strong> {{ $item->tracer_kerja_pekerjaan ?? '-' }}</li>
                                <li class="list-group-item"><strong>Nama Perusahaan:</strong> {{ $item->tracer_kerja_nama ?? '-' }}</li>
                                <li class="list-group-item"><strong>Jabatan:</strong> {{ $item->tracer_kerja_jabatan ?? '-' }}</li>
                                <li class="list-group-item"><strong>Status:</strong> {{ $item->tracer_kerja_status ?? '-' }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Lokasi:</strong> {{ $item->tracer_kerja_lokasi ?? '-' }}</li>
                                <li class="list-group-item"><strong>Alamat:</strong> {{ $item->tracer_kerja_alamat ?? '-' }}</li>
                                <li class="list-group-item"><strong>Tanggal Mulai:</strong> {{ $item->tracer_kerja_tgl_mulai ?? '-' }}</li>
                                <li class="list-group-item"><strong>Gaji:</strong> {{ $item->tracer_kerja_gaji ?? '-' }}</li>
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