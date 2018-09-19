@extends('Admin.auth.layouts.app')
@section('title', 'Login')

@section('body')

<div class="login-logo">
    {{-- <a href="/">High<strong>Winds</strong><span class="text-muted">|</span><small style="font-size: 0.5em;">monitoring LIVE!</small></a> --}}
    <center>
        <a href="/"><img src="{{ asset('imgs/logo_big.png') }}" alt="Logo" class="img img-responsive"></a>
        
    </center>
</div>
<!-- /.login-logo -->

<div class="login-box-body">
    @if (Session::has('message'))
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @endif
    <p class="login-box-msg"><b>Sign in</b> to your <strong><span class="text-danger">Admin</span></strong> profile to start your session...</p>
    
    <form action="{{ route('admin.login') }}" method="post">

    {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-danger btn-block">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    
    {{-- <a href="{{ route('password.request') }}">I forgot my password</a>

    <div class="text-center">
        <p>- OR -</p>
        <a href="{{ route('register') }}" class="text-center">
            <button class="btn btn-info btn-lg"><strong>Register a new membership</strong></button>
        </a>
    </div> --}}

</div>
<!-- /.login-box-body -->

@endsection