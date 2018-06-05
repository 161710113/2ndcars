@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel">
			  <div class="panel-heading" align="center">Masukan Komentar
			  	<div class="panel-title pull-left"><a href="{{ url()->previous() }}"><button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button></a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('comment.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
                      <div class="form-group {{ $errors->has('comment') ? ' has-error' : '' }}">
			  			<label class="control-label">Komentar</label>	
			  			<input type="text" name="comment" class="form-control"  required>
			  			@if ($errors->has('comment'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
					  <div class="form-group {{ $errors->has('user_id') ? 'has error' : '' }}">
                        <label class="control-label">user</label>
                        <select name="user_id" class="form-control">
                            <option>---</option>
                            @foreach($user as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('user_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_id') }}</strong>
                        </span>
                        @endif
						</div>
						</div>
					  <div class="form-group {{ $errors->has('berita') ? 'has error' : '' }}">
                        <label class="control-label">Berita</label>
                        <select name="berita" class="form-control">
                            <option>---</option>
                            @foreach($berita as $data)
                            <option value="{{ $data->id }}">{{ $data->judul }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('berita'))
                        <span class="help-block">
                            <strong>{{ $errors->first('berita') }}</strong>
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