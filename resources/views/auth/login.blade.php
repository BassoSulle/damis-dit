<html>

<head>
  {{-- <link rel="stylesheet" href="{{asset('asset/css/style.css')}}"> --}}
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
  <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">

  <title>Asset Management System</title>
</head>
<style type="text/css">
    body {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        /* background-image: url('{{ asset('asset/img/123.jpg') }}'); */
        background-color: #ebebeb;

        /* background-color: #f1efef; */
        font-family: 'Ubuntu', sans-serif;
    }

    .main {
        background-color: #ffffff;
        width: 800px;
        height: 400px;
        margin: 1em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
        border-top: 5px solid #68adf7;
    }

    .header {
        width: 800px;
        margin-top: 3em;
        margin-right: auto;
        margin-left: 24em;
        text-align: center;
        align-content: center;
        justify-content: center;
    }

    .sign {
        padding-top: 60px;
        color: #277EDB;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }

    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    /* border: none; */
    /* border-radius: 20px; */
    outline: none;
    box-sizing: border-box;
    /* border: 2px solid rgba(0, 0, 0, 0.02); */
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 24px;
    font-family: 'Ubuntu', sans-serif;
    }

    form.form1 {
        padding-top: 20px;
    }

    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    /* border: none; */
    /* border-radius: 20px; */
    outline: none;
    box-sizing: border-box;
    /* border: 2px solid rgba(0, 0, 0, 0.02); */
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }


    /* .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;

    } */

    .submit {
        cursor: pointer;
        /* border-radius: 2em; */
        color: #fff;
        background: linear-gradient(to bottom, #277EDB, #277EDB);
        /* border: 2px solid #277EDB; */
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 16.7%;
        font-size: 15px;
        font-weight: bold;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);'
        width = 400px;
        outline: none;
    }

    .submit:hover {
        /* color: #ffff; */
        /* border: 2px solid #277EDB; */
        /* background: none; */
        /* font-size: 14px; */
    }
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #8cc0f8;
        padding-top: 55px;
        margin-right: 50px;
    }

    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #3d97f7;
        text-decoration: none;
    }

    a:hover {
        /* text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12); */
        color: #0f71da;
        text-decoration: none;
    }
    /* added style for error alert */
    .error {
        color: red;
        font-size: 12px;
        text-align: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .img {
        margin: 0;
        padding: 0px 0px 0px 15px;
        border-radius: 1.5em;

    }
    .side-img {
        width: 400px;
        height: 393.5px;
        border-radius: 1.5em 0 0 1.5em;
    }

    /* .logo-side {
        margin-top: 4px;
    } */

    .logo {
        width: 99px;
    }

    .title-1 {
        font-size: 20px;
        font-weight: bold;
    }

    .title-2 {
        font-size: 22px;
        color: #277EDB;
    }

    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
  }

</style>
<body>
<div class="container-fluid" class="bodycolor">
    <div class="header">
        <div class="row">
            <div class="col-md-2 logo-side">
                <img class="logo" src="{{ asset('asset/img/logo.jpg') }}" alt="" srcset="">
            </div>
            <div class="col-md-8 text-center">
                <h3 class="title-1">The United Republic of Tanzania</h3>
                <h3 class="title-2">Welcome to TIRDO Asset Management Information System</h3>
            </div>
        </div>
    </div>
  <div class="main shadow">
    <div class="row">
        <div class="col-md-6 img">
            <img class="side-img" src="{{ asset('asset/img/tirdo.png') }}" alt="" srcset="">
        </div>
        <div class="col-md-6">
            <p class="sign" align="center">TAMIS</p>
            <form class="form1" action="{{ route('login')}}" method="POST">
                @csrf
            @error('email')
                <p class="invalid-feedback error" role="alert">
                    {{ $message }}
                </p>
            @enderror
            @error('password')
                <p class="invalid-feedback error" role="alert">
                    {{ $message }}
                </p>
            @enderror
            <input class="un form-control" type="email" align="center" required="required" name="email" placeholder="Email">
            <input class="pass form-control" type="password" align="center" required="required" name="password" placeholder="Password">
            <div class="row">
                <button type="submit" class="btn btn-info submit col-md-8" align="center">Log in</button>
            </div>
            <p class="forgot" align="right"><a href="#">Forgot Password?</p>
            </form>
        </div>
    </div>

  </div>
</div>
</div>

  <!-- bootstrap JS
  ============================================ -->
  <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

</body>

</html>


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
