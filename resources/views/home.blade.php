
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ asset('assets/admin/images/icon/logo_2ndcars.png') }}"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
