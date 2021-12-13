@extends('layout.bahagia')

@section('title','Edit Data Kaos')

@section('subjudul','Edit Data Kaos')

@section('konten')
<body>
	<a href="/kaos"> Kembali</a>

	<br/>
	<br/>

	@foreach($kaos as $p)
	<form action="/kaos/update" method="post">
		{{ csrf_field() }}
        <table class="table table-borderless">
		    <input type="hidden" name="id" value="{{ $p->kodekaos }}"> <br/>
            <tr>
		        <td> Merk Kaos </td>
                <td> <input type="text" required="required" name="merkkaos" value="{{ $p->merkkaos }}"> <br/> </td>
            </tr>
            <tr>
		        <td> Stock Kaos </td>
                <td> <input type="number" required="required" name="stockkaos" value="{{ $p->stockkaos }}"> <br/> </td>
            </tr>
            <tr>
		        <td> Tersedia </td>
                <td><input type="radio" id="ya" name="tersedia" value="Y" @if ($p->tersedia === "Y" ) checked="checked" @endif>
                    <label for="ya">Tersedia</label><br>
                    <input type="radio" id="tidak" name="tersedia" value="T" @if ($p->tersedia === "T" ) checked="checked" @endif>
                    <label for="tidak">Tidak Tersedia</label><br> <br/>
                </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
