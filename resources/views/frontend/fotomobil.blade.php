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
									<form action="{{ route('fotomobil.store') }}" method="post" enctype="multipart/form-data">
			  							{{ csrf_field() }}
										<div class="row">											
                                            <div>
                                            <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                                                <label class="control-label">Foto</label>	
                                                <input type="file" id="foto" name="foto" class="validate" accept="image/*" required>
                                                @if ($errors->has('foto'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('foto') }}</strong>
                                                    </span>
                                                @endif
                                            </div>											
											<div class="form-group {{ $errors->has('id_mobil') ? 'has error' : '' }}">
												<label class="control-label">Mobil</label>
												<select name="id_mobil" class="form-control">
													<option>-</option>
													@foreach($mobil as $data)
													<option value="{{ $data->id }}">{{ $data->nama_mobil }}</option>
													@endforeach
												</select>
												@if ($errors->has('mobil'))
												<span class="help-block">
													<strong>{{ $errors->first('mobil') }}</strong>
												</span>
												@endif
											</div>
											<div class="col-md-12 col-sm-12">
												<div class="max-w300 m-auto">
													<button class="site-button btn-block" type="submit">Done</button>												
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