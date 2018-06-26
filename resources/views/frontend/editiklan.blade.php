@extends('layouts.user')
@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle sale-car used-car-banner" style="background-image:url({{ asset('assets/user/images/banner/bnr2.jpg') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
					<div class="text-center text-white m-b30">
						<h1 class="text-white m-b10">Gift your family a trusted used car</h1>
						<span class="m-r10"><i class="fa fa-check"></i> 100% Verified Buyers</span>
						<span><i class="fa fa-check"></i> List Your Car For Free</span>
					</div>
					<div class="used-car ">
						<div class="dlab-tabs">
							<div class="tab-content">
								<div id="by-budget" class="tab-pane clearfix active in" >
									<form action="{{ route('iklan.update',$mobil->id) }}" method="post" enctype="multipart/form-data">
			  							{{ csrf_field() }}
										<div class="row">
											<div>
                                            <div class="form-group {{ $errors->has('plat_nomor') ? ' has-error' : '' }}">
                                                <label class="control-label">Plat Nomor Kendaraan</label>	
                                                <input type="text" name="plat_nomor" class="form-control" value="{{ $mobil->plat_nomor }}"  required>
                                                @if ($errors->has('plat_nomor'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('plat_nomor') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
                                                <label class="control-label">Judul</label>	
                                                <input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}"  required>
                                                @if ($errors->has('nama_mobil'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nama_mobil') }}</strong>
                                                    </span>
                                                @endif
                                            </div>                                         
                                            <div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
                                                <label class="control-label">Transmisi</label>	
                                                <select name="transmisi" class="form-control">                                                    
                                                    <option value="Automatic"  {{ $mobil->transmisi ? 'selected="selected"' : '' }}>Automatic</option>
                                                    <option value="Manual"  {{ $mobil->transmisi ? 'selected="selected"' : '' }}>Manual</option>                                                    
                                                </select>
                                                @if ($errors->has('transmisi'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('transmisi') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                                                <label class="control-label">Nomor Telephone</label>	
                                                <input type="text" name="no_hp" class="form-control" value="{{ $mobil->no_hp }}"  required>
                                                @if ($errors->has('no_hp'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                                                <label class="control-label">Harga</label>	
                                                <input type="text" name="harga" class="form-control" value="{{ $mobil->harga }}"  required>
                                                @if ($errors->has('harga'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('harga') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                                <label class="control-label">Deskripsi</label>	
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
                                            <div class="form-group {{ $errors->has('id_user') ? 'has error' : '' }}">
                                                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Selesai</button>
                                            </div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
	</div>
@endsection