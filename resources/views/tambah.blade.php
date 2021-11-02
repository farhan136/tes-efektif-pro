<!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
      </div>
      <div class="modal-body">
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
          </div>
          @error('foto')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
          </div>
          @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual" name="harga_jual">
          </div>
          @error('harga_jual')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" name="harga_beli">
          </div>
          @error('harga_beli')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok">
          </div>
          @error('stok')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>