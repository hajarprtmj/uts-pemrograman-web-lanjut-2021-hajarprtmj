@extends('bukus.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Detail Daftar Buku
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>ID BUKU: </b>{{$Buku->id_buku}}</li>
<li class="list-group-item"><b>JUDUL: </b>{{$Buku->Judul}}</li>
<li class="list-group-item"><b>Penulis: </b>{{$Buku->Penulis}}</li>
<li class="list-group-item"><b>Penerbit: </b>{{$Buku->Penerbit}}</li>
<li class="list-groupitem"><b>Kategory: </b>{{$Buku->Kategory}}</li>
<li class="list-groupitem"><b>Jumlah: </b>{{$Buku->Jumlah}}</li>
</ul>
</div>
<a class="btn btn-success mt-
3" href="{{ route('bukus.index') }}">Kembali</a>
</div>
</div>
</div>
@endsection