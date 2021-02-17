@extends('template_backend.home')
@section('subjudul','Wisata')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('travel.create') }}" class="btn btn-info">Tambah Wisata</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Kategori</th>
 			<th>Kota</th>
 			<th>Thumbnail</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
@foreach($travel as $result => $hasil)
 		<tr>
 			<td>{{ $result + $travel->firstitem() }}</td>
 			<td>{{$hasil->nama}}</td>
 			<td>{{$hasil->categories->nama}}</td>
 			<td>{{$hasil->cities->nama}}</td>
 			<td><img src="{{ $hasil->gambar }}" class="img-fluid" style="width:80px;"></td>
 			<td>
 				
 				<form action="{{route('travel.destroy',$hasil->id)}}" method="post">
 				@csrf
 				@method('delete')
 				<a href="{{ route('travel.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
 				<button class="btn btn-danger btn-sm" type="submit">Delete</button>
 				</form>
 			</td>
 		</tr>
@endforeach
 	</tbody>
 </table>
 {{$travel->links()}}
@endsection