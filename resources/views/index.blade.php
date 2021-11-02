@extends('welcome')

@section('content')

	<button class="btn btn-success" data-toggle="modal" data-target="#tambahBarang">Tambahkan Barang</button><br><br><br>
	@include('tambah')
	<table class="table table-bordered" id="table-barang">
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
			  <td>{{$b->foto}}</td>
			  <td>{{$b->nama}}</td>
			  <td>{{$b->kode}}</td>
			  <td>{{$b->harga_jual}}</td>
			  <td>{{$b->harga_beli}}</td>
			  <td>{{$b->stok}}</td>
			  <td><button class="btn btn-danger" data-toggle="modal" data-target="#hapusBarang{{$b->id}}">Hapus Barang</button></td>
			</tr>
			@include('hapus')
			@endforeach
		</tbody>
	</table>


@endsection