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
									<form action="{{ route('sell.store') }}" method="post" enctype="multipart/form-data">
			  							{{ csrf_field() }}
										<div class="row">
											<div>
												<div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
													<label>Judul</label>
													<input type="text" name="nama_mobil" class="form-control"  required>
													@if ($errors->has('nama_mobil'))
														<span class="help-block">
															<strong>{{ $errors->first('nama_mobil') }}</strong>
														</span>
													@endif
												</div>
											</div>											
												<div>
												<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
													<label>Harga</label>
													<input type="text" name="harga" class="form-control"  required>
													@if ($errors->has('harga'))
														<span class="help-block">
															<strong>{{ $errors->first('harga') }}</strong>
														</span>
													@endif
													</div>
												</div>
												<div>
														<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
															<label>Deskripsi</label>
															<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
															@if ($errors->has('deskripsi'))
															<span class="help-block">
																<strong>{{ $errors->first('deskripsi') }}</strong>
															</span>
															@endif
														</div>
													</div>
													<div>
															<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
																<label>Nomor Telepon</label>
																<input type="text" name="no_hp" class="form-control"  required>
																@if ($errors->has('no_hp'))
																	<span class="help-block">
																		<strong>{{ $errors->first('no_hp') }}</strong>
																	</span>
																@endif
															</div>
														</div>
												<div>
												<div class="form-group {{ $errors->has('plat_nomor') ? ' has-error' : '' }}">
													<label>Plat Nomor</label>
													<input type="text" name="plat_nomor" class="form-control"  required>
													@if ($errors->has('plat_nomor'))
														<span class="help-block">
															<strong>{{ $errors->first('plat_nomor') }}</strong>
														</span>
													@endif
												</div>
											</div>																
											<div>
											<div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
													<label>Transmisi</label><br>
													<select name="transmisi" class="form-control">
														<option>-</option>														
														<option value="Automatic">Automatic</option>
														<option value="Manual">Manual</option>														
													</select>
													@if ($errors->has('transmisi'))
														<span class="help-blocks">
															<strong>{{$errors->first('transmisi')}}</strong>
														</span>
													@endif
												</div>
											</div>                                            																						
                                            <div>
												<div class="form-group {{ $errors->has('id_merk') ? ' has-error' : '' }}">
													<label>Merk</label>
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
											</div>
											<div>
												<div class="form-group {{ $errors->has('id_tipe') ? ' has-error' : '' }}">
													<label>Tipe</label>
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
											</div>
											<div>
												<div class="form-group {{ $errors->has('id_lokasi') ? ' has-error' : '' }}">
													<label>Lokasi</label>
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
											</div>
											<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
												<label class="control-label">Cover</label>	
												<input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
												@if ($errors->has('foto'))
													<span class="help-block">
														<strong>{{ $errors->first('foto') }}</strong>
													</span>
												@endif
											</div>
											<div>
												<div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
													<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
												</div>
											</div>
											<div class="col-md-12 col-sm-12">
												<div class="max-w300 m-auto">
													<button class="site-button btn-block" type="submit">Continue</button>												
												</div>
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