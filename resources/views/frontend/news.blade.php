@extends('layouts.user')
@section('content')
<br><br><br><br><br><br><br>
<div class="section-full bg-white content-inner-1">
			<div class="container">
				<div class="section-head text-center head-1">
					<span class="text-primary">Read our latest news</span>
					<h3 class="h3 text-uppercase">Latest News</h3>
				</div>                
				@foreach($berita as $data)
				<div class="row">					                    
						<div class="item">
							<div class="ow-blog-post date-style-2 dlab-latest-blog">
								<div class="ow-post-media dlab-img-effect zoom-slow"> <img src="{{ asset('/img/berita/'.$data->foto) }}" style="max-height:280px;max-width:500px;margin-top:10px;" alt=""> </div>
								<div class="ow-post-meta">
									<ul>
										<li class="profile-user">
											<img src="images/testimonials/pic1.jpg" alt=""/>
										</li>										
										<li><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;{{ $data->created_at->diffForHumans() }}</li>
									</ul>
								</div>
								<div class="ow-post-info ">
									<div class="ow-post-title">
										<h4 class="post-title"> <a href="/news/{{$data->id}}" title="Video post">{{ $data->judul }}</a> </h4>
									</div>
									<div class="ow-post-text">
										<p>{{ substr($data['isi'],0,150) }}....</p>
									</div>
									<div class="ow-post-readmore "> 
										<a href="/news/{{$data->id}}" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a> 
									</div>
								</div>
							</div>
						</div>						
					</div>
                    <hr>
					@endforeach	                    			            
				</div>			
		</div>		
@endsection