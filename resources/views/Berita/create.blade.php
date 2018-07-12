@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">TAMBAH DATA BERITA
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('isi') ? 'has error' : ''}} ">
			  			<label class="control-label">Isi Berita</label>
			  			<textarea name="isi" id="isi" class="form-control"></textarea>
			  			@if ($errors->has('isi'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('isi') }}</strong>
			  			</span>
			  			@endif
			  		</div>

                    <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Sampul</label>	
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                      </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>&nbsp;Done</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection