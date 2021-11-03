@extends('welcome')

@section('content')

	<a href="{{url('/tambah')}}" class="btn btn-success">Tambahkan Barang</a><br><br>
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<form action="{{url('cari')}}" method="post">
		@csrf
		<div class="input-group mb-3" style="width: 50%;">
		  <input type="text" class="form-control" placeholder="cari sesuatu disini" name="cari">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">cari</button>
		  </div>
		</div>
	</form>
	@isset($url)
		@if (strpos($url, "cari")!==false)
			<a href="{{url('/')}}" class="btn btn-primary">
				Semua Data
			</a>
		@endif
	@endisset

	<table class="table table-bordered" id="table-barang" style="margin-top: 50px;">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Nama</th>
				<th>Kode</th>
				<th>Harga Jual</th>
				<th>Harga Beli</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($barang as $b)
			<tr>
			  <td>{{$loop->iteration}}</td>
			  <td><img src="{{Storage::url($b->foto)}}" style="height: 200px; width: 200px;"></td>
			  <td>{{$b->nama}}</td>
			  <td>{{$b->kode}}</td>
			  <td>{{$b->harga_jual}}</td>
			  <td>{{$b->harga_beli}}</td>
			  <td>{{$b->stok}}</td>
			  <td>
			  	<a href="{{url('/edit', $b->id)}}" class="btn btn-warning">Edit</a>
			  	<button class="btn btn-danger" data-toggle="modal" data-target="#hapusBarang{{$b->id}}">Hapus</button>
			  </td>
			</tr>
			@include('hapus')
			@endforeach
		</tbody>
	</table>

{{ $barang->links() }}
@endsection