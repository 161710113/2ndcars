@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">MASUKAN PROVINSI DI INDONESIA
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('lokasi.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('provinsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Provinsi</label>	
			  			<input type="text" name="provinsi" class="form-control"  required>
			  			@if ($errors->has('provinsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('provinsi') }}</strong>
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