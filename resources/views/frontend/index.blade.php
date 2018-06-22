@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- Slider -->        
        <!-- Slider END -->
		<!-- New Car -->		
		<!-- New Car New -->	
		<!-- About Us -->
		<br><br><br><br><br>
		<div class="section-full about-us bg-white content-inner-2" style="background-image: url({{ asset('assets/user/images/background/about-us.jpg') }}); background-position:bottom; background-repeat:no-repeat; background-size:100%;">
			<div class="container">
				<div class="section-head text-center head-1">
					<span class="text-primary">Welcome To Our Website</span>
					<h3 class="h3 text-uppercase">CARS ZONE</h3>
					<div class="dlab-separator bg-gray-dark"></div>
					<p>MARKETPLACE penjualan mobil terlaris se-Indonesia.</p>
				</div>				
			</div>
			<div class="dlab-info-about">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="">
								<h3 class="h3 text-uppercase m-b10 m-t0">About us </h3>
								<p class="p-t0">Everything you need to build an amazing usedcars website.</p>
							</div>
							<div class="about-us-info">
								<p>Kami menyediakan tempat untuk para penjual mobil,menjual mobilnya dengan mudah dan bagi para pembeli akan lebih mudah mencari mobil keinginannya da sangat menghemat waktu.</p>
								<div class="media media-info">
									<div class="media-left">
										<a href="#">
											<img class="media-object" src="{{ asset('assets/user/images/testimonials/pic2.jpg') }}" alt="">
										</a>
									</div>
									<div class="media-body p-l15">
										<h4 class="font-weight-700 text-uppercase text-primary m-b10">Have any question ?</h4>
										<h2 class="media-heading open-sans font-weight-700">0878-3788-	1169</h2>
									</div>
								</div>								
							</div>	
						</div>
						<div class="col-md-7">
							<div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
								<img src="{{ asset('assets/user/images/car.png') }}" alt=""> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us END -->
		<!-- For Your Quick Look -->        
        <!-- For Your Quick Look END -->
		<!-- Car Find And Sale -->        
        <!-- For Your Quick Look END -->
		<!-- Testimonial -->
        <div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url(images/background/bg3.jpg);">
            <div class="container">
                <div class="section-head text-center head-1 text-white">
					<span>What Our Happy Clients say about us </span>
					<h3 class="h3 text-uppercase">our Testimonial</h3>
					<div class="dlab-separator bg-white"></div>
					<p>Mencari Mobil Idaman-ku.</p>
				</div>
                <div class="section-content ">
					
					<div class="testimonial-center owl-carousel owl-btn-center-lr">
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>CARS ZONE mempermudah saya untuk mencari mobil yang saya ingin kan karena tidak perlu berkeliling mencari mobilnya..</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="{{ asset('assets/user/images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">Fransisca</strong> 
										<span class="text-white">Buyer</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>Mencari mobil berkualitas tidak sulit di CARS ZONE karena disini mobil bisa kita lihat dulu sebelum menghubungi sang pemilik..</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="{{ asset('assets/user/images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">John Doe</strong> 
										<span class="text-white">Buyer</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-2 testimonial-bg style-1">
								<div class="testimonial-text">
									<p>Terima kasih CARS ZONE berkat website ini saya menjual mobil saya dengan cepat,saya memasang iklan pagi pagi,sore hari mobil sudah ada yang beli,Terima Kasih CARS ZONE.</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-box">
										<div class="testimonial-pic radius shadow"><img src="{{ asset('assets/user/images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
										<strong class="testimonial-name">Angela</strong> 
										<span class="text-white">Seller</span> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Testimonial -->
        <!-- Latest News -->		
		<!-- Latest News END-->		
		<!-- Client logo Carousel -->		
		<!-- Client logo Carousel END -->
		<!-- Content END-->
    </div>
@endsection