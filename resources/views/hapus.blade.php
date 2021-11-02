<div class="modal fade" id="hapusBarang{{$b->id}}" tabindex="-1" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus {{$b->nama}}?
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>