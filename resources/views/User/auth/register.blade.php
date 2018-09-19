@extends('User.auth.layouts.app')
@section('title', 'Register')

@section('pageSpecificHeadContent')
    <link rel="stylesheet" href="{{asset('rawThemes/adminLTE/bower_components/select2/dist/css/select2.min.css')}}">

    <style type="text/css">
    [class^='select2'] {
        border-radius: 0px !important;
    }
    .select2-container {
        padding: 0px;
        border-width: 0px;
    }
    .select2-container .select2-choice {
        height: 38px;
        line-height: 38px;
    }
    .select2-container.form-control {
        height: auto !important;
    }
    .form-control{
        -webkit-appearance:none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
    }
    </style>
@endsection

@section('body')

<div class="login-logo">
    {{-- <a href="/">High<strong>Winds</strong><span class="text-muted">|</span><small style="font-size: 0.5em;">monitoring LIVE!</small></a> --}}
    <center>
        <a href="/"><img src="{{ asset('imgs/logo_big.png') }}" alt="Logo" class="img img-responsive"></a>
        
    </center>
</div>
<!-- /.login-logo -->

<div class="login-box-body">
    <p class="login-box-msg"><b>Register</b> with a New <span class="text-success"><strong>User</strong></span> profile...</p>

    <form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
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
        <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback{{ $errors->has('usertype') ? ' has-error' : '' }}">
            {{-- <input type="text" name="usertype" class="form-control" placeholder="User Type" value="{{ old('usertype') }}" required autofocus> --}}
            <select style="width: 100%;" class="select2 form-control" id="usertype" name="usertype">
                <option value="">(Choose User Type…)</option>
                <option value="Researcher">Researcher</option>
                <option value="Botanist">Botanist</option>
                <option value="General">General</option>
            </select>
            <span class="glyphicon glyphicon-th-list form-control-feedback"></span>
            @if ($errors->has('usertype'))
            <span class="help-block">
                <strong>{{ $errors->first('usertype') }}</strong>
            </span>
            @endif
        </div>
        
        <div class="row">
            <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-success btn-block">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <div class="text-center">
        <p>- OR -</p>
        <a href="{{ route('login') }}" class="text-center">
            <button class="btn btn-info btn-lg"><strong>Log In as an existing member</strong></button>
        </a>
    </div>

</div>
<!-- /.login-box-body -->

@endsection

@section('pageSpecificFooterContent')

<script src="{{ asset('rawThemes/adminLTE/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript">
    $("#usertype").val("{{ old('usertype') }}").trigger('change');
</script>


@endsection