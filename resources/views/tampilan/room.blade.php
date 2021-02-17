@extends('template_frontend.home')
@section('isi')
<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{$data->nama}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Deskripsi</h3>
            <p class="sample-text">
                {{$data->deskripsi}}
            </p>
        </div>
    </section>
    <!-- End Sample Area -->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                
            <div class="section-top-border">
                <h3 class="mb-30">Informasi</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">

                        <div class="table-row">
                            
                            <div class="country ml-4">Nama Wisata</div>
                            <div class="visit">{{$data->nama}}</div>
                            
                        </div>
                        <div class="table-row">
                            
                            <div class="country ml-4">Harga Tiket</div>
                            <div class="visit">Rp.{{$data->harga}}</div>
                            
                        </div>
                        <div class="table-row">
                            
                            <div class="country ml-4">Jam Buka</div>
                            <div class="visit">{{$data->jamBuka}}</div>
                            
                        </div>
                       
                        <div class="table-row">
                            
                            <div class="country ml-4">Alamat</div>
                            <div class="visit">{{$data->alamat}}</div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h3>Image Gallery</h3>
                <div class="row gallery-item">
                    
                    <div class="col-md-4">
                        <a href="img/elements/g2.jpg" class="gallery_img img-gal">
                            <div class="single-gallery-image" style="background: url({{asset($data->gambar)}});"></div>
                        </a>
                    </div>
                    @foreach($galleries as $gallery)
                    @if($data->id == $gallery->travel_id)
                    <div class="col-md-4">
                        <a href="img/elements/g3.jpg" class="gallery_img img-gal">
                            <div class="single-gallery-image" style="background: url({{asset($gallery->gambar)}});"></div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    <div class="col-md-4">
                        <a href="img/elements/g4.jpg" class="gallery_img img-gal">
                            <div class="single-gallery-image" style="background: url({{asset('public/tourby/img/elements/g4.jpg')}});"></div>
                        </a>
                    </div>
                    
                
            </div>
        </div>  
    </div>
    </div>
    <!-- End Align Area -->

@endsection