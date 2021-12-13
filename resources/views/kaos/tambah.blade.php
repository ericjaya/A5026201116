@extends('layout.bahagia')

@section('title','Tambah Data Kaos')

@section('subjudul','Tambah Data Kaos')

@section('konten')
	<a href="/kaos"> Kembali</a>

	<br/>
	<br/>

	<form action="/kaos/store" method="post">
		{{ csrf_field() }}
        <table class="table table-borderless">
		    <tr>
                <td>Merk Kaos</td>
                <td><input type="text" name="merkkaos" required="required"> <br/></td>
            </tr>
            <tr>
                <td>Stock Kaos</td>
                <td><input type="number" name="stockkaos" required="required"> <br/></td>
            </tr>
            <tr>
                <td>Tersedia</td>
                <td><input type="radio" id="ya" name="tersedia" value="Y" checked="checked">
                    <label for="ya">Tersedia</label><br>
                    <input type="radio" id="tidak" name="tersedia" value="T">
                    <label for="tidak">Tidak Tersedia</label><br> <br/></td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">
	</form>
@endsection
