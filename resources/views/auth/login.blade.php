@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"/>
@endsection



@section('content')

<!------------ Thanks Daniel Almeida for the reference  ----------->
<!-- https://dribbble.com/shots/4027518-Login-screen-interaction -->

<div class="login-wrapper">
  <div class="login-left">
    <img src="{{ URL::asset('images/windowLogin.jpg')}}" id="login-left">
    <div class="h1">Login</div>
  </div>
  <form  method="POST" action="{{ route('login') }}">
  @csrf
  <div class="login-right">
    <div class="h2">Login</div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" id="Email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" placeholder="Password" class="form-control" required>
        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
        @enderror
    </div>
    <div class="checkbox-container">
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <div class="text-checkbox">{{ __('Remember Me') }}</div>
    </div>
    <div class="button-area">
        <!--button class="btn btn-secondary">Login</button-->
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    <br/>
    <div class="checkbox-container">
        @if (Route::has('password.request'))
                                    <a class="text-forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
        @endif
    </div>
  </div>
</form>
</div>

<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection
