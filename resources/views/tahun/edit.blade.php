@foreach($tahun as $item)
<div class="modal fade" id="formedit{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/{{auth()->user()->role}}/tahun-lulus/{{$item->id}}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailLarge" class="form-label">Tahun Lulus</label>
                            <input type="text" id="emailLarge" class="form-control" placeholder="Masukan Tahun Lulus"
                                name="tahun_lulus" value="{{$item->tahun_lulus}}">
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Keterangan</label>
                            <input type="text" id="dobLarge" class="form-control" placeholder="Opsional"
                                name="keterangan" value="{{$item->keterangan}}">
                                
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
