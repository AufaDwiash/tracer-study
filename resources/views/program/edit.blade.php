@foreach($program_keahlian as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Data Program Keahlian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/program-keahlian/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="idBidangKeahlian{{$item->id}}" class="form-label">Bidang Keahlian</label>
                            <select class="form-control" id="idBidangKeahlian{{$item->id}}" name="id_bidang_keahlian" required>
                                @foreach($bidang_keahlian as $bidang)
                                <option value="{{$bidang->id}}" {{$item->id_bidang_keahlian == $bidang->id ? 'selected' : ''}}>{{$bidang->bidang_keahlian}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="kodeProgram_keahlian{{$item->id}}" class="form-label">Kode Program Keahlian</label>
                            <input type="text" id="kodeProgram_keahlian{{$item->id}}" class="form-control"
                                name="kode" value="{{$item->kode_program_keahlian}}" disabled>
                        </div>
                        <div class="col mb-0">
                            <label for="programKeahlian{{$item->id}}" class="form-label">Program Keahlian</label>
                            <input type="text" id="programKeahlian{{$item->id}}" class="form-control"
                                name="program_keahlian" value="{{$item->program_keahlian}}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach