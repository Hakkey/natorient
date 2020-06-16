
@extends('layouts.app')
<head>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
</head>
<body class="hold-transition login-page" style="background-color: rgb(37, 37, 37)">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b style="color: #ffff">Admin</b><span style="color: #d3cf06">LTE</span></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body card-dark">
      <p class="login-box-msg">Sign in to start your session</p>
      <p class="login-box-msg">admin@gmail.com</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          
        </div>

        <div class="input-group mb-3">
          <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-warning btn-block">Log In</button>
            <br>
            @if (Route::has('password.request'))
            <p class="mb-1 text-center">
              <a class="btn btn-link text-center mb-1" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            </p>
            @endif

            <p class="mb-0 text-center">
              <a href="{{ route('register') }}">Register</a>
            </p>
          </div>
        </div>
      </form>

      
    </div>
  </div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
