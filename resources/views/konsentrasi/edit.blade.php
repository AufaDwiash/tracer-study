@foreach($konsentrasi_keahlian as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Konsentrasi Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/konsentrasi-keahlian/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <!-- Program Keahlian Dropdown -->
                        <div class="col mb-0">
                            <label for="idProgramKeahlian{{$item->id}}" class="form-label">Program Keahlian</label>
                            <select class="form-control" id="idProgramKeahlian{{$item->id}}" name="id_program_keahlian" required>
                                @foreach($program_keahlian as $program)
                                <option value="{{$program->id}}" {{$item->id_program_keahlian == $program->id ? 'selected' : ''}}>
                                    {{$program->program_keahlian}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Kode Konsentrasi Keahlian -->
                        <div class="col mb-0">
                            <label for="kodeKonsentrasiKeahlian{{$item->id}}" class="form-label">Kode Konsentrasi Keahlian</label>
                            <input type="text" id="kodeKonsentrasiKeahlian{{$item->id}}" class="form-control"
                                name="kode_konsentrasi_keahlian" value="{{$item->kode_konsentrasi_keahlian}}" disabled>
                        </div>
                        
                        <!-- Konsentrasi Keahlian -->
                        <div class="col mb-0">
                            <label for="konsentrasiKeahlian{{$item->id}}" class="form-label">Konsentrasi Keahlian</label>
                            <input type="text" id="konsentrasiKeahlian{{$item->id}}" class="form-control"
                                name="konsentrasi_keahlian" value="{{$item->konsentrasi_keahlian}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach