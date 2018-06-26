@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/user/images/banner/bnr1.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
					<h1 class="text-white">Second Cars List!</h1>
					<h4 class="text-white">Mobil Mobil yang siap untuk dijual.</h4>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->                    
                    <!-- Side bar END -->
                    <!-- left part start -->
                    <div class="col-sm-12 col-md-12 col-lg-13">
                        <div class="row">							
                            <!-- blog grid  -->
                            <div id="masonry" class="dlab-blog-grid-3 used-car-info">
								@foreach($mobil as $data)
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">										
									<div class="dlab-feed-list m-b30 text-left">
										@foreach($data->galeri as $aye)
										<div class="dlab-media"> 
											<a href="{{ route('detail',$data->id) }}"><img src="{{ asset('/img/galeri/'.$aye->foto) }}" style="height:280px;width:500px;margin-top:10px;" alt=""></a> 
										</div>		
										@endforeach							
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="{{ route('detail',$data->id) }}">{{ $data->nama_mobil }}</a></h4>
											<p class="dlab-price"><span class="text-black">Rp.{{ $data->harga }}</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i>{{ $data->lokasi->provinsi }}</div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">													
													<li>{{ $data->transmisi }}</li>
													<li>{{ $data->merk->nama_merk }} </li>
													<li>{{ $data->tipe->nama_tipe }}</li>
												</ul>
											</div>											
										</div>										
									</div>
                                </div>
								@endforeach								
							</div>
                            <!-- blog grid END -->
                            <!-- Pagination  -->
                            <!-- <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!-- Pagination END -->
                        </div>
						<div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="modal-body clearfix">
										<div class="pull-letf max-width-300"></div>
										<div class="lead-form">
											<form>
												<h3 class="m-t0">Where should we send seller details?</h3>
												<div class="form-group">
													<input  value="" class="form-control" placeholder="Name"/>
												</div>	
												<div class="form-group">
													<input  value="" class="form-control" placeholder="Mobile Number"/>
												</div>
												<div class="text-left">
													<div class="search-content">
														<input id="send-details" type="checkbox">
														<label for="send-details"  class="search-content-area">Send details on email </label>
													</div>
												</div>
												<div class="clearfix">
													<button type="button" class="btn-primary site-button btn-block">See Seller Details Now</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
                    </div>
                    <!-- left part END -->
                </div>
            </div>
        </div>
    </div>
@endsection