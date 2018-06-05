@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading" align="center">Edit Mobil 
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mobil.update',$mobil->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">warna</label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $mobil->warna }}"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
			  			<label class="control-label">transmisi</label>	
			  			<input type="text" name="transmisi" class="form-control" value="{{ $mobil->transmisi }}"  required>
			  			@if ($errors->has('transmisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('transmisi') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">no_hp</label>	
			  			<input type="text" name="no_hp" class="form-control" value="{{ $mobil->no_hp }}"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $mobil->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $mobil->deskripsi }}"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('tipe_id') ? ' has-error' : '' }}">
			  			<label class="control-label">tipe_id</label>	
			  			<input type="text" name="tipe_id" class="form-control" value="{{ $mobil->tipe_id }}"  required>
			  			@if ($errors->has('tipe_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tipe_id') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">merk_id</label>	
			  			<input type="text" name="merk_id" class="form-control" value="{{ $mobil->merk_id }}"  required>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('member_id') ? ' has-error' : '' }}">
			  			<label class="control-label">member_id</label>	
			  			<input type="text" name="member_id" class="form-control" value="{{ $mobil->member_id }}"  required>
			  			@if ($errors->has('member_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('member_id') }}</strong>
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