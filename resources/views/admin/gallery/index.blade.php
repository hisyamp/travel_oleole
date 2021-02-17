@extends('template_backend.home')
@section('subjudul','Galleri')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('galeri.create') }}" class="btn btn-info">Tambah Galeri</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Wisata</th>
 			<th>Gambar</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
@foreach($galleries as $result => $hasil)
 		<tr>
 			<td>{{ $result + $galleries->firstitem() }}</td>
 			<td>{{$hasil->travels->nama}}</td>
 			<td><img src="{{ $hasil->gambar }}" class="img-fluid" style="width:80px;"></td>
 			<td>
 				
 				<form action="{{route('galeri.destroy',$hasil->id)}}" method="post">
 				@csrf
 				@method('delete')
 				<button class="btn btn-danger btn-sm" type="submit">Delete</button>
 				</form>
 			</td>
 		</tr>
@endforeach
 	</tbody>
 </table>
@endsection