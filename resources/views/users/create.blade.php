@extends('bukus.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Tambah Buku
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('bukus.store') }}" id="myFo
rm">
@csrf
<div class="form-group">
<label for="id_buku">ID BUKU</label>
<input type="text" name="id_buku" class="formcontrol"
id="id_buku" aria-describedby="id_buku" >
</div>
<div class="form-group">
<label for="Judul">JUDUL</label>
<input type="Judul" name="Judul" class="formcontrol"
id="Judul" aria-describedby="Judul" >
</div>
<div class="form-group">
<label for="Kelas">PENULIS</label>
<input type="Penulis" name="Penulis" class="formcontrol"
id="Penulis" aria-describedby="Penulis" >
</div>
<div class="form-group">
<label for="Jurusan">PENERBIT</label>
<input type="Penerbit" name="Penerbit" class="Penerbit"
id="Penerbit" aria-describedby="Penerbit" >
</div>
<div class="form-group">
<label for="Kategory">KATEGORY</label>
<input type="Kategory" name="Kategory" class="formcontrol"
id="Kategory" aria-describedby="Kategory" >
</div>
<div class="form-group">
<label for="Jurusan">JUMLAH</label>
<input type="Jumlah" name="Jumlah" class="formcontrol"
id="Jumlah" aria-describedby="Jumlah" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection