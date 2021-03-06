@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel ">
			  <div class="panel-heading" align="center"><h2>DATA BERITA
			  </h2></div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-striped">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Judul</th>
					  {{-- <th>Content</th> --}}
                      <th>Sampul</th>
					  <th>Dibuat pada</th>
					  <th colspan="3">Aksi</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($berita as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->judul }}</p></td>
				    	{{-- <td><p>{!! substr($data['isi'],0,50) !!}</p></td> --}}
                        <td><img src="../img/berita/{{$data->foto}}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
				    	<td>{{ $data->created_at->diffForHumans() }}</td>
						<td>
							<a class="btn btn-default" href="{{ route('berita.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
						</td>
						<td>
						<a class="btn btn-info" href="{{ route('berita.show',$data->id) }}">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('berita.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('berita.create') }}"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection