@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">Masukan Mobil
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      
                      <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna Mobil</label>	
			  			<input type="text" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Transmisi Mobil</label>	
			  			<input type="text" name="transmisi" class="form-control"  required>
			  			@if ($errors->has('transmisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('transmisi') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Hp Pemilik</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Mobil</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                      </div>
                      
                      <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi mobil</label>	
			  			<input type="text" name="deskripsi" class="form-control"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                        </div>
                          
                        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
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