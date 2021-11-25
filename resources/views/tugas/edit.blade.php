<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

    @foreach($tugas as $p)
    <form action="/tugas/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $p->IDPegawai }}"> <br/>
        Tanggal <input type="datetime" required="required" name="tanggal" value="{{ $p->Tanggal }}"> <br/>
        Nama Tugas <textarea required="required" name="namatugas">{{ $p->NamaTugas }}</textarea> <br/>
        Status <textarea required="required" name="status">{{ $p->Status }}</textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach


</body>
</html>
