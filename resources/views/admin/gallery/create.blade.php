@extends('template_backend.home')
@section('subjudul','Tambah Kategori')
@section('content')

@if(count($errors)>0)
 @foreach($errors->all() as $error)
 <div class="alert alert-danger" role="alert">
 	{{ $error }}
 </div>
 @endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
 
@endif

<form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="">Galeri</label>
		<select class="form-control" name="travel_id" id="">
			<option value="" holder>Pilih Wisata</option>
			@foreach($travels as $result)
			<option value="{{$result->id}}">{{$result->nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Gambar</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Gambar</button>
	</div>
</form>
@endsection