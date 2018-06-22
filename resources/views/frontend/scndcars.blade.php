@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle">
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
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <aside  class="side-bar">
                            <div class="widget recent-posts-entry">
								<h4 class="widget-title">Advanced Search</h4>
								<div class="dlab-accordion advanced-search toggle" id="accordion1">
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#brand" class="collapsed" >
													Brand
												</a>
											</h5>
										</div>
										<div id="brand" class="acod-body collapse in">
											<div class="acod-content">
												<input type="search" id="container-search" value="" class="form-control" placeholder="Search...">
												<div class="product-brand" id="searchable-area">
													<div class="search-content">
														<input id="brand1" type="checkbox">
														<label for="brand1" class="search-content-area">Carrera </label>
													</div>
													<div class="search-content">
														<input id="brand2" type="checkbox">
														<label for="brand2" class="search-content-area">Boxster  </label>
													</div>
													<div class="search-content">
														<input id="brand3" type="checkbox">
														<label for="brand3"  class="search-content-area">3-Series </label>
													</div>
													<div class="search-content">
														<input id="brand4" type="checkbox">
														<label for="brand4"  class="search-content-area">Cayenne </label>
													</div>
													<div class="search-content">
														<input id="brand5" type="checkbox">
														<label for="brand5"  class="search-content-area">F-type</label>
													</div>
													<div class="search-content">
														<input id="brand6" type="checkbox">
														<label for="brand6"  class="search-content-area">GT-R </label>
													</div>
													<div class="search-content">
														<input id="brand7" type="checkbox">
														<label for="brand7"  class="search-content-area">GTS </label>
													</div>
													<div class="search-content">
														<input id="brand8" type="checkbox">
														<label for="brand8"  class="search-content-area">M6 </label>
													</div>
													<div class="search-content">
														<input id="brand9" type="checkbox">
														<label for="brand9"  class="search-content-area">Macan </label>
													</div>
													<div class="search-content">
														<input id="brand10" type="checkbox">
														<label for="brand10"  class="search-content-area">Mazda6 </label>
													</div>
												</div>
											</div>
										</div>
									</div>									
								</div>
								
							</div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                    <!-- left part start -->
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="row">							
                            <!-- blog grid  -->
                            <div id="masonry" class="dlab-blog-grid-3 used-car-info">
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic4.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic1.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic3.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic4.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic1.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30 text-left">
										<div class="dlab-media"> 
											<a href="used-car-details.html"><img src="{{ asset('assets/user/images/our-work/work/pic2.jpg') }}" alt=""></a> 
										</div>
										<div class="dlab-info text-left">
											<h4 class="dlab-title"><a href="used-car-details.html">Hyundai EON LPG Magna Plus </a></h4>
											<p class="dlab-price"><span class="text-black">$26,598</span></p>
											<div class="m-t10"><i class="flaticon-placeholder font-18"></i> Marmora Road Chi Minh City </div>
											<div class="icon-box-btn text-center m-tb20">
												<ul class="clearfix">
													<li>2017</li>
													<li>Manual</li>
													<li>Diesel </li>
												</ul>
											</div>
											<div class="view-seller-dtl">
												<a href="#" class="site-button btn-block" title="READ MORE" rel="bookmark" data-toggle="modal" data-target="#car-details">VIEW SELLER DETAILS</a>
											</div>
										</div>
									</div>
                                </div>
								
							</div>
                            <!-- blog grid END -->
                            <!-- Pagination  -->
                            <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
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