@extends('layout.bahagia')

@section('title','Data Kaos')

@section('subjudul','Data Kaos')

@section('konten')
	<a href="/kaos/tambah"> + Tambah Kaos Baru</a>

	<br/>
	<br/>

    <div class='container' align='center'>
        <form action="/kaos/cari" method="GET" class="form-group">
            <input class="form-control" type="text" name="cari" placeholder="Cari Kaos berdasarkan merk .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
    </div>

	<table border="1" class="table maintable">
		<tr>
			<th>Merk Kaos</th>
			<th>Stock Kaos</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($kaos as $p)
		<tr>
			<td>{{ $p->merkkaos }}</td>
			<td>{{ $p->stockkaos }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/kaos/detail/{{ $p->kodekaos }}">Detail</a>
                |
				<a href="/kaos/edit/{{ $p->kodekaos }}">Edit</a>
				|
				<a href="/kaos/hapus/{{ $p->kodekaos }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $kaos->links() }}

    <p>
        Keterangan Ketersediaan: <br>
        Y : Tersedia <br>
        T : Tidak Tersedia <br>
        </p> <br>

@endsection

