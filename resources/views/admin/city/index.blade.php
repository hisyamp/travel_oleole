@extends('template_backend.home')
@section('subjudul','Kota')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('city.create') }}" class="btn btn-info">Tambah Kota</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
@foreach($city as $result => $hasil)
 		<tr>
 			<td>{{ $result + $city->firstitem() }}</td>
 			<td>{{$hasil->nama}}</td>
 			<td>
 				
 				<form action="{{route('city.destroy',$hasil->id)}}" method="post">
 				@csrf
 				@method('delete')
 				<a href="{{ route('city.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
 				<button class="btn btn-danger btn-sm" type="submit">Delete</button>
 				</form>
 			</td>
 		</tr>
@endforeach
 	</tbody>
 </table>
@endsection