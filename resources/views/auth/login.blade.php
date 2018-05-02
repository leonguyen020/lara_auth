{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}

    {{--<!-- CDN -->--}}
    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--<link rel="stylesheet" href="{{URL::to('backEnd/loginForm.css')}}">--}}
    {{--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    {{--<!------ Include the above in your HEAD tag ---------->--}}
    {{--<!--Pulling Awesome Font -->--}}
    {{--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<title>Login to dashboard | Innovation & Technology Club</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container" style="margin-top:30px">--}}
    {{--<div class="col-md-4 col-md-offset-4">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading wrapper">--}}
                {{--<h3 class="panel-title"><strong>Sign in </strong></h3>--}}
            {{--</div>--}}

            {{--<div class="panel-body">--}}
                {{--<form role="form" method="POST" action="{{ url('/login') }}">--}}
                    {{--@csrf--}}
                    {{--@if(@$errors->has('email') | $errors->has('password'))--}}
                        {{--<div class="alert alert-danger">--}}
                            {{--<a class="close" data-dismiss="alert" href="">×</a>--}}
                            {{--Incorrect Email or Password!--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--<div class="input-group text-box">--}}
                        {{--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>--}}
                        {{--<input id="email"--}}
                               {{--type="email"--}}
                               {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
                               {{--name="email"--}}
                               {{--value="{{ old('email') }}"--}}
                               {{--placeholder="Email">--}}
                        {{--@if ($errors->has('email'))--}}
                            {{--<span class="invalid-feedback">--}}
                                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="input-group text-box">--}}
                        {{--<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>--}}
                        {{--<input id="password"--}}
                               {{--type="password"--}}
                               {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                               {{--name="password"--}}
                               {{--placeholder="password">--}}
                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback">--}}
                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="input-group">--}}
                        {{--<div class="checkbox" style="margin-top: 0px;">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox"--}}
                                       {{--name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="wrapper">--}}
                        {{--<button type="submit" class="btn btn-primary btn-lg btn-block">--}}
                            {{--{{ __('Login') }} <i class="fa fa-sign-in"></i>--}}
                        {{--</button>--}}

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--{{ __('Forgot Your Password?') }}--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login to dashboard | Innovation & Technology Club</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::to('backEnd/plugins/iCheck/square/blue.css') }}">

    <link rel="stylesheet" href="{{URL::to('backEnd/loginForm.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form role="form" method="POST" action="{{ url('/login') }}">
            @csrf
            @if(@$errors->has('email') | $errors->has('password'))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="">×</a>
                    Incorrect Email or Password!
                </div>
            @endif
            <div class="form-group has-feedback">
                <input id="email"
                       type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                       value="{{ old('email') }}"
                placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password"
                type="password"
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                name="password"
                placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="input-group">
                    <div class="checkbox" style="margin-top: 0px;">
                        <label>
                            <input type="checkbox"
                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Login') }} <i class="fa fa-sign-in"></i>
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ URL::to('backEnd/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::to('backEnd/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::to('backEnd/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
