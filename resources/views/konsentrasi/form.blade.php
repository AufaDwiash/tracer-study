<div class="modal fade" id="formtambah" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Tambah Data Konsentrasi Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/konsentrasi-keahlian/store" method="post">
                    @csrf
                    <div class="row g-2">
                        <!-- Program Keahlian Dropdown -->
                        <div class="col mb-0">
                            <label for="program_keahlian" class="form-label">Program Keahlian</label>
                            <select class="form-control" id="program_keahlian" name="id_program_keahlian" required>
                                <option value="">Pilih Program Keahlian</option>
                                @foreach($program_keahlian as $program)
                                <option value="{{$program->id}}">{{$program->program_keahlian}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Kode Konsentrasi Keahlian -->
                        <div class="col mb-0">
                            <label for="kodeKonsentrasiKeahlian" class="form-label">Kode Konsentrasi Keahlian</label>
                            <input type="text" id="kodeKonsentrasiKeahlian" class="form-control" placeholder="Masukkan Kode"
                                name="kode_konsentrasi_keahlian"  value='{{$kode}}' disabled>
                        </div>
                        
                        <!-- Konsentrasi Keahlian -->
                        <div class="col mb-0">
                            <label for="konsentrasiKeahlian" class="form-label">Konsentrasi Keahlian</label>
                            <input type="text" id="konsentrasiKeahlian" class="form-control" placeholder="Masukkan Konsentrasi Keahlian"
                                name="konsentrasi_keahlian" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>