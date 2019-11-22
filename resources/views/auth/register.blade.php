@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"/>
@endsection

@section('content')
<!------------ Thanks Daniel Almeida for the reference  ----------->
<!-- https://dribbble.com/shots/4027518-Login-screen-interaction -->

<div class="login-wrapper">
  <div class="login-left">
    <img src="http://res.cloudinary.com/dzqowkhxu/image/upload/v1513679279/bg-login_bxxfkf.png">
    <div class="h1">Enter the Nebula</div>
  </div>
  <div class="login-right">
    <div class="h2">Register</div>
    <div class="form-group">
      <input type="text" id="full-name" placeholder="Full Name">
      <label for="full-name">Full Name</label>
    </div>
    <div class="form-group">
      <input type="text" id="Email" placeholder="Email">
      <label for="Email">Email</label>
    </div>
    <div class="form-group">
      <input type="password" id="Password" placeholder="Password">
      <label for="Password">Password</label>
    </div>
    <div class="checkbox-container">
      <input type="checkbox">
      <div class="text-checkbox">I agree with the terms of service.</div>
    </div>
    <div class="button-area">
      <button class="btn btn-secondary">Login</button>
      <button class="btn btn-primary">Sign Up</button>
    </div>
  </div>
</div>

<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection
