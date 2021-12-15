@extends('layout.bahagia')

@section('title','EAS Pemrograman Web')

@section('subjudul','Tambahkan Barang yang Dibeli')

@section('konten')
	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		Kode Barang <input type="text" name="KodeBarang" required="required"> <br/>
		Jumlah Pembelian <input type="text" name="Jumlah" required="required"> <br/>
		Harga per item <input type="number" name="Harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
