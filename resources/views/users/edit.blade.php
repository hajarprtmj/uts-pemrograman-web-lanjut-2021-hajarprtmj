@extends('bukuss.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Daftar Buku
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
<form method="post" action="{{ route('nukuss.update', $Buku->id_buku) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
<label for="id_buku">ID BUKU</label>
<input type="text" name="Nim" class="formcontrol"
id="id_buku" value="{{ $Buku->id_buku }}" ariadescribedby="id_buku" >
</div>
<div class="form-group">
<label for="Judul">JUDUL</label>
<input type="text" name="Judul" class="formcontrol"
id="Judul" value="{{ $Buku->Judul }}" ariadescribedby="Judul" >
</div>
<div class="form-group">
<label for="Penulis">PENULIS</label>
<input type="Penulis" name="Penulis" class="formcontrol"
id="Penulis" value="{{ $Buku->Penulis }}" ariadescribedby="Penulis" >
</div>
<div class="form-group">
<label for="Penerbit">PENERBIT</label>
<input type="Penerbit" name="Penerbit" class="formcontrol"
id="Penerbit" value="{{ $Buku->Penerbit }}" ariadescribedby="Penerbit" >
</div>
<div class="form-group">
<label for="Kategory">JUMLAH</label>
<input type="Kategory" name="Kategory" class="formcontrol"
id="Kategory" value="{{ $Buku->Kategory }}" ariadescribedby="Kategory" >
</div>
<div class="form-group">
<label for="Jumlah">JUMLAH</label>
<input type="Jumlah" name="Jumlah" class="formcontrol"
id="Jumlah" value="{{ $Buku->Jumlah }" ariadescribedby="Jumlah" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection