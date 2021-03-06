@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">MASUKAN FOTO FOTO MOBIL
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Pict</label>	
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group {{ $errors->has('id_mobil') ? 'has error' : '' }}">
			  			<label class="control-label">Mobil</label>
			  			<select name="id_mobil" class="form-control">
			  				<option>-</option>
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_mobil }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('mobil') }}</strong>
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