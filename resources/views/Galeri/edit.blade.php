@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			  <div class="panel-body">
			  	<h2 class="sub-header">EDIT GALERI<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
			  	<form action="{{ route('galeri.update',$galeri->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
			  			<label class="control-label">Pict</label>	
			  			<input type="file" id="foto" name="foto" class="validate" accept="image/*" value="{{ $galeri->foto }}"  required>
			  			@if ($errors->has('foto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('id_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">Mobil</label>	
			  			<select name="id_mobil" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}"  {{ $mobilselect == $data->id ? 'selected="selected"' : '' }}>{{ $data->nama_mobil }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_mobil') }}</strong>
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