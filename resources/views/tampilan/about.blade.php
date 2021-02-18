@extends('template_frontend.home')
@section('isi')


	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
							<h2>about us</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->

    <!-- feature part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="{{asset('public/tourby/img/about_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="{{asset('public/tourby/img/section_tittle_img.png')}}" alt="#">
                        <h2>Tourby</h2>
                        <p>Sebuah website yang memudahkan anda ketika berkunjung ke sebuah kota dan mencari tempat untuk berlibur. Disini anda akan menemukan tempat favorit untuk destinasi liburan di setiap kota yang terdaftar dengan cepat </p>
                        <span>Anda Memiliki Referensi Tempat Wisata? Hubungi kami <a href="{{route('view.contact')}}">disini</a></span>
                        
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('public/tourby/img/animate_icon/Shape-1.png')}}" alt="" class="feature_icon_1')}}">
        <img src="{{asset('public/tourby/img/animate_icon/Shape-2.png')}}" alt="" class="feature_icon_2">
        <img src="{{asset('public/tourby/img/animate_icon/Shape-3.png')}}" alt="" class="feature_icon_3">
    </section>
    <!-- feature part end-->

            </div>
        </div>
    </section>
    <!-- popular place part end-->

@endsection