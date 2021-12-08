@extends('layout.bahagia')

@section('title','Tambah Tugas pegawai')

@section('subjudul','Tambah Tugas Pegawai')

@section('konten')
<body>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="tanggal" required="required"> <br/>
		Nama Tugas <textarea name="namatugas" required="required"></textarea> <br/>
		Status <textarea name="status" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
	</form>

</body>
@endsection
