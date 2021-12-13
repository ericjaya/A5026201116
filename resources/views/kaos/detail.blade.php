@extends('layout.bahagia')

@section('title','Detail Kaos')

@section('subjudul','Detail Kaos')

@section('konten')
<body>
	<a href="/kaos"> Kembali</a>

	<br/>
	<br/>

	@foreach($kaos as $p)
		{{ csrf_field() }}
        <table class="table table-borderless">
		    <input type="hidden" name="id" value="{{ $p->kodekaos }}"> <br/>
            <tr>
		        <td> Merk Kaos: </td>
                <td> {{ $p->merkkaos }} <br/> </td>
            </tr>
            <tr>
		        <td> Stock Kaos: </td>
                <td> {{ $p->stockkaos }}<br/> </td>
            </tr>
            <tr>
		        <td> Tersedia: </td>
                <td> {{ $p->tersedia }} <br/> </td>
            </tr>
        </table>
	@endforeach

    <p>
        Keterangan Ketersediaan: <br>
        Y : Tersedia <br>
        T : Tidak Tersedia <br>
        </p> <br>

@endsection
