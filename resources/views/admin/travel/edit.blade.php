@extends('template_backend.home')
@section('subjudul','Edit Wisata')
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

<form action="{{ route('travel.update',$travel->id) }}" method="post" enctype="multipart/form-data">
	@csrf
	@method('patch')
	<div class="form-group">
		<label for="">Nama Wisata</label>
		<input type="text" class="form-control" name="nama" value="{{$travel->nama}}">
	</div>
	<div class="form-group">
		<label for="">Kategori</label>
		<select class="form-control" name="category_id" id="">
			<option value="" holder>Pilih Kategori</option>
			@foreach($category as $result)
			<option value="{{$result->id}}"
				@if($travel->category_id == $result->id)
				 selected
				@endif
				>{{$result->nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Kota</label>
		<select class="form-control" name="city_id" id="">
			<option value="" holder>Pilih Kota</option>
			@foreach($city as $result)
			<option value="{{$result->id}}"
				@if($travel->city_id == $result->id)
				 selected
				@endif
				>{{$result->nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Harga Tiket</label>
		<input type="text" class="form-control" name="harga" value="{{$travel->harga}}">
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" class="form-control" name="alamat" value="{{$travel->alamat}}">
	</div>
	<div class="form-group">
		<label for="">Jam Buka</label>
		<input type="text" class="form-control" name="jamBuka" value="{{$travel->jamBuka}}">
	</div>
	<div class="form-group">
		<label for="">Akses Kendaraan</label>
		<input type="text" class="form-control" name="aksesKendaraan" value="{{$travel->aksesKendaraan}}">
	</div>
	<div class="form-group">
		<label for="">Deskripsi</label>
		<textarea class="form-control" name="deskripsi" cols="30" rows="10" id="deskripsi">{{$travel->deskripsi}}</textarea>
	</div>
	<div class="form-group">
		<label for="">Thumbnail</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Update Wisata</button>
	</div>
</form>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script> CKEDITOR.replace( 'content' );</script>
@endsection