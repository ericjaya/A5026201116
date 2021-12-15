@extends('layout.bahagia')

@section('title','EAS Pemrograman Web')

@section('subjudul','Keranjang Belanja')

@section('konten')
	<a href="/keranjangbelanja/tambah"> Beli </a>

	<br/>
	<br/>

	<table border="1" class="table maintable">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ number_format($p->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($p->Jumlah * $p->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
