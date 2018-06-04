@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel ">
			  <div class="panel-heading" align="center"><h2>Tambah Mobil
			  </h2></div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-striped">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
                      <th>Nama</th>
                      <th>Warna</th>
                      <th>Transmisi</th>
                      <th>Nomor Handphone</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Tipe</th>
                      <th>Merk</th>
					  <th colspan="3">Aksi</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
                        <td><p>{{ $data->nama }}</p></td>
                        <td><p>{{ $data->warna }}</p></td>
                        <td><p>{{ $data->transmisi }}</p></td>
                        <td><p>{{ $data->no_hp }}</p></td>
                        <td><p>{{ $data->harga }}</p></td>
                        <td><p>{{ $data->deskripsi }}</p></td>
                        <td><p>{{ $data->tipe_id }}</p></td>
                        <td><p>{{ $data->merk_id }}</p></td>
				    	<td></td>
						<td>
							<a class="btn btn-default" href="{{ route('mobil.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('mobil.create') }}"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection