@extends('bukus.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>DAFTAR BUKU</h2>
</div>
<div class="float-right my-2">
<a class="btn btnsuccess"
href="{{ route('bukus.create') }}"> Input Buku</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>ID BUKU</th>
<th>JUDUL</th>
<th>PENULIS</th>
<th>PENERBIT</th>
<th>KATEGORY</th>
<th>JUMLAH</th>
<th width="280px">Action</th>
</tr>
@foreach ($bukus as $Buku)
<tr>
<td>{{ $Buku->id_buku }}</td>
<td>{{ $Buku->Judul }}</td>
<td>{{ $Buku->Penulis }}</td>
<td>{{ $Buku>Penerbit }}</td>
<td>{{ $Buku->Kategory }}</td>
<td>{{ $Buku->Jumlah }}</td>
<td>
<form action="{{ route('bukus.destroy',$Buku->id_buku) }}" method="POST">
<a class="btn btninfo"
href="{{ route('bukus.show',$Buku->id_buku) }}">Show</a>
<a class="btn btnprimary"
href="{{ route('bukus.edit',$Buku->id_buku) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection