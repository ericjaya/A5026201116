@extends('layout.bahagia')

@section('title','Tambah Tugas pegawai')

@section('subjudul','Tambah Tugas Pegawai')

@section('konten')
<body>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

    <select name="idpegawai" >
        @foreach($pegawai as $p)
         <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
        @endforeach
        </select>

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
