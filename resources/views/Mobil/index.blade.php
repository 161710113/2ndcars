@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel ">
			  <div class="panel-heading" align="center"><h2>DATA MOBIL
			  </h2></div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-striped">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Plat Nomor</th>
                      <th>Mobil</th>
                      <th>Transmisi</th>
                      <th>Nomor HP</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Merk</th>
                      <th>Tipe</th>
                      <th>Lokasi</th>
                      <th>User</th>
					  <th colspan="3">Aksi</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->plat_nomor }}</p></td>
                        <td><p>{{ $data->nama_mobil }}</p></td>
                        <td><p>{{ $data->transmisi }}</p></td>
                        <td><p>{{ $data->no_hp }}</p></td>
                        <td><p>{{ $data->harga }}</p></td>
                        <td><p>{{ substr($data['deskripsi'],0,20) }}</p></td>
                        <td><p>{{ $data->merk->nama_merk }}</p></td>
                        <td><p>{{ $data->tipe->nama_tipe }}</p></td>
                        <td><p>{{ $data->lokasi->provinsi }}</p></td>
                        <td><p>{{ $data->user->name }}</p></td>
				    	<td></td>
						<td>
							<a class="btn btn-default" href="{{ route('mob.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('mob.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				  <div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('mob.create') }}"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</a>
			  	</div>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection