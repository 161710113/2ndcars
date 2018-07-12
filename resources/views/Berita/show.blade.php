@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-body">
              <div class="form-group" align="center">
			  			<img name="foto" src="{{ asset('img/berita/'.$berita->foto)  }}" style="max-height:500px;max-width:500px;margin-top:10px;">
			  		</div>
			  				<h1><b>{{ $berita->judul }}</b></h1><br>
			  				{!! $berita->isi !!}
			  		</div>
			  		<div class="panel-title pull-right"><a href="{{ url()->previous() }}"><button class="btn btn-success">Selesai</button></a>
			  	</div>
			  	</div>
			</div>
		</div>
	</div>
</div>
@endsection