@extends('layout.bahagia')

@section('title','Menambahkan pegawai')

@section('subjudul','Menambahkan Pegawai')

@section('konten')
<body>

	<form action="/pegawai/store" method="post" class="form-inline">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required" class="form-control"> <br/>
		Jabatan <input type="text" name="jabatan" required="required" class="form-control"> <br/>
		Umur <input type="number" name="umur" required="required" class="form-control"> <br/>
		Alamat <textarea name="alamat" required="required" class="form-control"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <a href="/pegawai"> Kembali</a>
</body>
@endsection

