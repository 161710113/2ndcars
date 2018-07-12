@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/user/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Used Car Details </h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->        
        <!-- Breadcrumb row END -->
        <div class="section-full p-t50 bg-white content-inner">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-sm-6 col-md-7 col-lg-8">
						<div>                            
							<div class="item">
								<div class="dlab-thum-bx"> <img src="{{ asset('/img/mobil/'.$mobil->foto) }}" style="max-height:480px;max-width:700px;margin-top:10px;" alt=""> </div>
							</div>                            
						</div>
						<div class="m-tb30">
							<h3 class="h3 m-t0">{{ $mobil->nama_mobil }}</h3>
							<ul class="used-car-dl-info">
								<li><i class="fa fa-map-marker"></i> {{ $mobil->lokasi->provinsi }}</li>
								<li><i class="fa fa-calendar"></i> Published on {{ $mobil->created_at->diffForHumans() }}</li>								
							</ul>
						</div>
						<div class="clearfix">
							<ul class="nav theme-tabs m-b10">
								<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="specifications"  href="#specifications">Specifications</a></li>                                								
							</ul>
                            <br>                            							
						</div>	
						{{ $mobil->deskripsi }}
						<br><hr>
						<div class="clearfix">
							<ul class="nav theme-tabs m-b10">
								<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="specifications"  href="#specifications">More Photo</a></li>                                								
							</ul>
                            <br>                            							
						</div>
						@foreach($mobil->galeri as $data)
						<img src="{{ asset('/img/galeri/'.$data->foto) }}" style="max-height:250px;max-width:300px;margin-top:10px;" alt="">
						@endforeach
					</div>
                    <!-- Side bar END -->
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="car-dl-info m-b30">
							<div class="price">
								<h2 class="m-t0 m-b5">Harga Rp.{{ number_format($mobil->harga) }}</h2>								
							</div>										
						</div>
						<div class="used-car-features clearfix m-b30">							
                            <div class="car-features">
								<i class="flaticon-car"></i>
								<h5>{{ $mobil->plat_nomor }}</h5>
								<span>Plat Nomor</span>	
							</div>
                            <div class="car-features">
								<i class="flaticon-car"></i>
								<h5>{{ $mobil->transmisi }}</h5>
								<span>Transmisi</span>	
							</div>
                            <div class="car-features">
								<i class="flaticon-car"></i>
								<h5>{{ $mobil->no_hp }}</h5>
								<span>Nomor Telp</span>	
							</div>
                            <div class="car-features">
								<i class="flaticon-car"></i>
								<h5>{{ $mobil->merk->nama_merk }}</h5>
								<span>Merk</span>	
							</div>		
                            <div class="car-features">
								<i class="flaticon-car"></i>
								<h5>{{ $mobil->tipe->nama_tipe }}</h5>
								<span>Tipe</span>	
							</div>					
							<div class="car-features">
								<i class="flaticon-car-key"></i>
								<h5>{{ $mobil->user->name }}</h5>
								<span>Owner</span>	
							</div>
						</div>						
					</div>
                </div>
            </div>
        </div>
	</div>
@endsection