<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('layouts.head')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(37, 37, 37);
                color: rgb(211, 207, 6);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
              <h1 class="display-4">Welcome to System</h1>
              <hr class="my-5" style="background-color: rgb(211, 207, 6);">
              <div class="row">
                @if (Route::has('login'))
                  @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById'logout-form').submit();">{{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                  @else
                    <div class="col links">
                      <a href="{{ route('login') }}">Login</a>
                    </div>

                  @if (Route::has('register'))
                    <div class="col links">
                      <a href="{{ route('register') }}">Register</a>
                    </div>
                  @endif
                    @endauth
                @endif
              </div>
            </div>
            
        </div>
    </body>
</html>
