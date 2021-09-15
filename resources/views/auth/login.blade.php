<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">
  
  <div class="container" >

      <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        @if(Session::get('fail'))
        <div class="alert alert-danfer">
        {{Session::get('fail')}}
        </div>
        @endif
      @csrf
        <div class="login-wrap">
          <p class="login-img"> <img src="{{ asset('img/logo.png')}}" alt="User Avatar" class="img-size-50 icon_lock_alt"></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror"
            placeholder="Username" value="{{ old('email') }}" autofocus>
            @error('email')
            <span class ="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input type="password" name="password" id="password" class="form-control
            @error('password') is-invalid @enderror" value="{{ old('email') }}" password="Password">
            @error('password')
            <span class ="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <label class="checkbox">
                  <!-- <input type="checkbox" value="remember-me"> Remember me -->
                  <!-- <span class="pull-right"> <a href="#"> Forgot Password?</a></span> -->
                      <label class="pull-right" for="password">PASSWORD @error('email')<span class="text-danger"> ({{ $message }})</span>@enderror <a class="forgot" href="{{ route('password.request') }}">(Forgot)</a></label>
              </label>


          <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Login') }}</button>
          {{-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> --}}
        </div>
      </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
  </div>


</body>

</html>










