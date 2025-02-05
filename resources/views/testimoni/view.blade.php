@foreach($testimonis as $item)
<div class="modal fade" id="view{{$item->id}}" tabindex="-1" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">View Testimoni Alumni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">                
                <div class="row g-2 mt-2">
                    <!-- Tanggal Testimoni -->
                    <div class="col mb-0">
                        <label class="form-label">Testimoni - {{$item->alumni->nama_depan ?? '-'}} {{$item->alumni->nama_belakang ?? '-'}}</label>
                        <textarea class="form-control" name="" id="" readonly>{{$item->testimoni}} </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach
