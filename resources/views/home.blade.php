
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
                    <h1>HELLO!!!</h1>
                    <h2>WELCOME BACK AGAIN!!!</h2>
                    <h3>MAKE SOMETHING AWESOME FOR YOUR LIFE</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
