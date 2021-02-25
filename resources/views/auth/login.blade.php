
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- style-->
  <link rel="stylesheet" type="text/css" href="{!! asset('asset/css/css-login.css') !!}">
</head>
<body>
    <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div style="font-size: 25px;">MANAJEMEN DNS
                <br>
                <span style="font-size: 23px;">Studi Kasus PANDI</span>
            </div>
        </div>
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="text" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                        
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>

                    <button type="submit">{{ __('Login') }}</button>

                    <br>

                    @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        
                        {{ __('Remember Me') }}
                    </label>                         
                    
                    </form>
                    <a href="{{ route('register') }}"><button type="button">{{ __('Register') }}</button></a>
            </div>
</body>
