@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading" align="center">Edit Berita 
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('berita.update',$berita->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar</label>	
			  			<input type="file" id="gambar" name="gambar" class="validate" accept="image/*" value="{{ $berita->gambar }}"  required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Title</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $berita->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
			  			<label class="control-label">Content</label>	
			  			<input type="text" name="isi" class="form-control" value="{{ $berita->isi }}"  required>
			  			@if ($errors->has('isi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi') }}</strong>
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