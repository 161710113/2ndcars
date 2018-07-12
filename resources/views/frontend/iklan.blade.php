@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url({{ asset('assets/user/images/banner/bnr3.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Iklan Mobil Anda</h1>
				</div>
            </div>
        </div>
        <!-- inner page banner END -->        
		<div class="section-full p-t50 bg-white content-inner-2">
            <div class="container">
                <div class="row">
					<div class="col-md-9">
						<div class="m-b30">
							<h4 class="h4 m-t0">Mobil yang anda iklan kan</h4>
							<ul class="used-car-dl-info">
								<li>Iklan bisa anda hapus dan edit. </li>
							</ul>
						</div>
					</div>
				</div>
                <div class="row">                
                    <!-- Side bar start -->
                    @foreach($mobil as $data)                    
					<div class="col-md-3 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a20 text-center">
                            <!-- @foreach($data->galeri as $aye) -->
                            <div class="dlab-media"> 
                                <a href="{{ route('detail',$data->id) }}"><img src="{{ asset('/img/mobil/'.$data->foto) }}"  alt=""></a> 
                            </div>		
                            <!-- @endforeach -->
                            <a href="{{ route('detail',$data->id) }}"><h4>{{ $data->nama_mobil }}</h4></a>
								<div class="input-group m-b20">
                                    <a class="btn btn-success" href="{{ route('iklan.update',$data->id) }}"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
                                </div>
                                <div class="input-group m-b20">
                                    <a class="btn btn-success" href="{{ route('fotomobil',$data->id) }}"><span class="glyphicon glyphicon-picture"></span>&nbsp;Tambah Gambar</a>
                                </div>                           
								<div class="input-group m-b20">
                                    <form method="post" action="{{ route('iklan.destroy',$data->id) }}" >
                                        <input name="_token" type="hidden" value="{!! csrf_token() !!}">
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</button>
                                    </form>
                                </div>                        							
						</div>
                    </div>
                    @endforeach	        
                    <!-- Side bar END -->                    					
                </div>
                <h4><b><i>*Iklan anda akan terpasang setelah menerima persetujuan pengurus</i></b></h4><br><br>
			 </div>             
        </div>        		
	</div>    
@endsection