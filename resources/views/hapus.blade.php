<div class="modal fade" id="hapusBarang{{$b->id}}" tabindex="-1" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus {{$b->nama}}?
      </div>
      <div class="modal-footer">
        <a href="{{url('/hapus', $b->id)}}" class="btn btn-danger">Hapus</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>