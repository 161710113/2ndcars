@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-body">
			  				Plat Nomor : <b>{{ $mobil->plat_nomor }}</b><br>
			  				Mobil : <b>{{ $mobil->nama_mobil }}</b><br> 
			  				Transmisi : <b>{{ $mobil->transmisi }}</b><br>
                            Merk : <b>{{ $mobil->merk->nama_merk }}</b><br>
                            Tipe : <b>{{ $mobil->tipe->nama_tipe }}</b><br>
			  				Pemilik : <b>{{ $mobil->user->name }}</b><br>
			  				Nomor Handphone : <b>{{ $mobil->no_hp }}</b><br>
                            Lokasi : <b>{{ $mobil->lokasi->provinsi }}</b><br>
                            Harga : <b>Rp. {{ $mobil->harga }}</b><br>
                            Deskripsi : <br><b>{{ $mobil->deskripsi }}</b>
			  		</div>
			  		<div class="panel-title pull-right"><a href="{{ url()->previous() }}"><button class="btn btn-success">Selesai</button></a>
			  	</div>
			  	</div>
			</div>
		</div>
	</div>
</div>
@endsection