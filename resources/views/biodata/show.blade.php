@extends("layout")

@section("content")
<br><br>
<ul>
	<li>ID Mahasiswa: {{ $data->id }} </li>
	<li>Nama Mahasiswa: {{ $data->name }} </li>
	<li>NIM Mahasiswa: {{ $data->nim }} </li>
	<li>Alamat Mahasiswa: {{ $data->address }} </li>
	<li>File Path : {{ $data->filePath}}</li>
	<li><img src="{{ asset('photo_mhs/'.$data->photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" /> </li></li>
</ul>

<a class="btn btn-dark" href="{{ route('biodata.index') }}">Kembali</a>
@endsection