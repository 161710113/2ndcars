@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card card-container">
        <h3>Belum punya akun? Silahkan <a href="{{ route('register') }}">Daftar</a></h3><br>
        <h1><center>LOG IN</center></h1>
        <br>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
                <span id="reauth-email" class="reauth-email"></span>
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
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">
                                    {{ __('Login') }}
                                </button>
            </form><!-- /form -->
            <a class="forgot-password" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
@endsection
