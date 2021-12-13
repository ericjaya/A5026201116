@extends('layout.bahagia')

@section('title','Edit Informasi pegawai')

@section('subjudul','Edit Informasi Pegawai')

@section('konten')

<!DOCTYPE html>
<body>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		Nama: {{ $p->pegawai_nama }}<br/>
		Jabatan: {{ $p->pegawai_jabatan }} <br/>
		Umur: {{ $p->pegawai_umur }} <br/>
		Alamat: {{ $p->pegawai_alamat }} <br/>
	@endforeach


</body>
@endsection
