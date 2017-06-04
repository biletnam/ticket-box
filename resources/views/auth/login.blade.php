<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Google-Login.css') }}">
</head>

<body style="background-image: url('{{ asset('img/jumbo.jpg') }}'); background-size: cover;">
    <div class="container panel-custom">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <h1 class="text-center login-title">Login ke Griya Market</h1>
                <div class="account-wall">
                    <img class="profile-img" src="{{ asset('img/login-ava.png') }}"
                    alt="">
                    <form class="form-signin" method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        
                        <button type="submit" class="btn btn-lg btn-primary btn-block">LOGIN</button>

                       <label class="checkbox pull-left" style="margin-left: 20px">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="checkbox">Ingat Saya</input>
                        </label>
                        <a href="register" class="pull-right need-help">Daftar Sekarang</a><span class="clearfix"></span>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>