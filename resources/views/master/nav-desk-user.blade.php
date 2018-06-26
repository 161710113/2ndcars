<header class="site-header header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li>
								<a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> `secondcars@gmail.com`</a>
							</li>
							<li><a href="#" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="site-button-link github hover"><i class="fa fa-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="#"><img src="{{ asset('assets/user/images/logo-light.png') }}" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
						<i class="fa fa-bars"></i>
					</button>                                        
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">	
						<ul class="nav navbar-nav">
							<li> <a href="{{route ('home')}}">Home</a></li>
							<li><a href="#">Mobil<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">									
									<li><a href="{{route ('mobil')}}">Mobil Bekas Terbaru</a></li>
									<li><a href="{{route ('sell.store')}}">Jual Mobilmu</a></li>														
								</ul>
							</li>
							<li><a href="{{route ('news')}}">Berita</a>
							</li>							
							<li>
							@if (Route::has('login'))
								@auth
							<a id="navbarDropdown" class="name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
								<ul class="sub-menu">									
									<li><a href="{{route ('iklan')}}">Iklanku</a></li>
									<li><a href="href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                    </form></li>														
								</ul>
								@else
								<a href="{{ route('login') }}">Login</a>
								@endauth
							@endif
							</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>