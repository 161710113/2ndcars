@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">EDIT MOBIL<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('mob.update',$mobil->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('plat_nomor') ? ' has-error' : '' }}">
			  			<label class="control-label">plat_nomor</label>	
			  			<input type="text" name="plat_nomor" class="form-control" value="{{ $mobil->plat_nomor }}"  required>
			  			@if ($errors->has('plat_nomor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_nomor') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}"  required>
			  			@if ($errors->has('nama_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>
					  <div class="form-group {{$errors->has('transmisi') ? 'has-error' : ''}}">
								<label class="control-label">Transmisi</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="transmisi" class="flat" value="Automatic" {{ $mobil->transmisi == 'automatic' ? 'checked' : '' }}> Automatic

								<label type="radio-inline"> 
								<input type="radio" name="transmisi" class="flat" value="Manual" {{ $mobil->transmisi == 'manual' ? 'checked' : '' }}> Manual

							</label>
								@if ($errors->has('transmisi'))
									<span class="help-block">
										<strong>{{$errors->first('transmisi')}}</strong>
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
			  			<label class="control-label">Deskrips</label>	
			  			<Textarea name="deskripsi" class="form-control"  required> {{ $mobil->deskripsi }} </Textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('id_merk') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk</label>	
			  			<select name="id_merk" class="form-control">
			  				@foreach($merk as $data)
			  				<option value="{{ $data->id }}"  {{ $merkselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->nama_merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_merk') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('id_tipe') ? ' has-error' : '' }}">
			  			<label class="control-label">Tipe</label>	
			  			<select name="id_tipe" class="form-control">
			  				@foreach($tipe as $data)
			  				<option value="{{ $data->id }}"  {{ $tipeselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->nama_tipe }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_tipe'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_tipe') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('id_lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Lokasi</label>	
			  			<select name="id_lokasi" class="form-control">
			  				@foreach($lokasi as $data)
			  				<option value="{{ $data->id }}"  {{ $lokasiselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->provinsi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
			  			<label class="control-label">User</label>	
			  			<select name="id_user" class="form-control">
			  				@foreach($user as $data)
			  				<option value="{{ $data->id }}"  {{ $userselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-success">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>
		
	</div>
</div>
@endsection