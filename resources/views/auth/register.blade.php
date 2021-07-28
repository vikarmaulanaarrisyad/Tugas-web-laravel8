<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
  <title>Register | Politeknik Harapan Bersama Tegal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('adminlte/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('adminlte/') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/') }}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte/') }}/plugins/iCheck/square/blue.css">

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
      <a href="{{ asset('img/logopoltek.png') }}">
        <img src="{{ asset('img/logopoltek.png') }}" alt="" style="margin-bottom:10px">
    </a>
    <br>
    <a href="{{ route('login') }}"><b>Login </b>Politeknik HarBer</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Register akun</p>

    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        @csrf

      <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"" placeholder="Name" id="name" { old('name') }} autocomplete="OFF">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        @error('name')
            <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong></span>
        @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control control @error('email') is-invalid @enderror" placeholder="Email" id="email" value="{{ old('email') }}" required autocomplete="email" autocomplete="off">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        @error('email')
            <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong></span>
        @enderror
      </div>

      <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" id="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
      </div>

      <div class="form-group has-feedback">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmasi Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <label for="">Masukan Gambar Profile</label>
          <input type="file" name="avatar" class="form-control" >
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>

    @error('avatar')
        <span class="invalid-feedback" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
        </span>
    @enderror




      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-register btn-success btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->



<!-- jQuery 3 -->
<script src="{{ asset('adminlte/') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminlte/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<script src="{{ asset('adminlte/') }}/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
