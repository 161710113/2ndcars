@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card card-container">
        <h1><center>REGISTER</center></h1>
        <br>                
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        @csrf
                                <input type="text" id="inputEmail" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="User Name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                                
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>                        
                                <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
