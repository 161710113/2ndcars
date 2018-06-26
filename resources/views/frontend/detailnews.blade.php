@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/user/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">{{ $berita->judul }}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->        
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                <center>
                <img src="{{ asset('/img/berita/'.$berita->foto) }}" style="max-height:1000px;max-width:1000px;margin-top:10px;" alt="">
                </center>
                    <div class="dlab-post-title ">
                        <h3 class="post-title">{{ $berita->judul }}</h3>
                    </div>
                    <div class="dlab-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i>{{ $berita->created_at->diffForHumans() }}</li>                                                        
                        </ul>
                    </div>
                    <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/default/thum1.jpg" alt=""></a> </div>
                    <div class="dlab-post-text">
                    {{ $berita->isi }}              
                    </div>
                    
                </div>                
                <!-- blog END -->
            </div>
        </div>
    </div>
@endsection