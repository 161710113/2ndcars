@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">MASUKAN DATA MOBIL
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mob.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('plat_nomor') ? ' has-error' : '' }}">
			  			<label class="control-label">Plat Nomor</label>	
			  			<input type="text" name="plat_nomor" class="form-control"  required>
			  			@if ($errors->has('plat_nomor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_nomor') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control"  required>
			  			@if ($errors->has('nama_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>
                    <div class="form-group {{$errors->has('transmisi') ? 'has-error' : ''}}">
								<label class="control-label">Transmisi</label><br>
								<input type="radio" class="radio-control" name="transmisi" value="Automatic">Automatic&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" class="radio-control" name="transmisi"  value="Manual">Manual
								@if ($errors->has('transmisi'))
									<span class="help-blocks">
										<strong>{{$errors->first('transmisi')}}</strong>
									</span>
								@endif
					</div>
                      <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor HP</label>	
			  			<input type="text" name="no_hp" class="form-control"  required>
			  			@if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('deskripsi') ? 'has error' : ''}} ">
			  			<label class="control-label">deskripsi</label>
			  			<Textarea name="deskripsi" id="deskripsi" class="form-control" required></Textarea>
			  			@if ($errors->has('deskripsi'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('deskripsi') }}</strong>
			  			</span>
			  			@endif
			  		</div>
                      <div class="form-group {{ $errors->has('id_merk') ? 'has error' : '' }}">
			  			<label class="control-label">Merk</label>
			  			<select name="id_merk" class="form-control">
			  				<option>-</option>
			  				@foreach($merk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('merk'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('merk') }}</strong>
			  			</span>
			  			@endif
                    </div>
                    <div class="form-group {{ $errors->has('id_tipe') ? 'has error' : '' }}">
			  			<label class="control-label">Tipe</label>
			  			<select name="id_tipe" class="form-control">
			  				<option>-</option>
			  				@foreach($tipe as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_tipe }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('tipe'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('tipe') }}</strong>
			  			</span>
			  			@endif
                    </div>
                    <div class="form-group {{ $errors->has('id_lokasi') ? 'has error' : '' }}">
			  			<label class="control-label">Lokasi</label>
			  			<select name="id_lokasi" class="form-control">
			  				<option>-</option>
			  				@foreach($lokasi as $data)
			  				<option value="{{ $data->id }}">{{ $data->provinsi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('lokasi'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('lokasi') }}</strong>
			  			</span>
			  			@endif
                    </div>
                    <div class="form-group {{ $errors->has('id_user') ? 'has error' : '' }}">
			  			<!-- <label class="control-label">Pemilik</label>
			  			<select name="id_user" class="form-control">
			  				<option>-</option>
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('user'))
			  			<span class="help-block">
			  				<strong>{{ $errors->first('user') }}</strong>
			  			</span>
			  			@endif -->
						  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"
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