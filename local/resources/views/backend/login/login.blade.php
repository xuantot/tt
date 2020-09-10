<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <base href="{{asset('')}}">
  <title>@yield('title')</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="public/backend/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="public/backend/bower_components/Ionicons/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="public/backend/dist/css/AdminLTE.min.css">
 
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <link href="public/common/css/phi.css" rel="stylesheet">

</head>
<body class="hold-transition login-page" style="height:auto">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ADMIN |</b> vnjob.jp</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Welcome You !</p>

    @if (session('thongbao'))            
    <p class="text-red"><i class="icon fa fa-ban"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
    @endif

    <form action="" method="post">
        {{csrf_field()}}
      <div class="form-group has-feedback">        
        <input type="text" class="form-control" placeholder="ID" name="name" value="{{old('name')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('name'))<p class='text-red'><strong>{{$errors->first('name')}}</p></strong>@endif   
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))<p class='text-red'><strong>{{$errors->first('password')}}</p></strong>@endif  
      </div>
      <div class="row">
        <div class="col-xs-8">
            <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="remember" name="remember" value="ok">
                    Remember Me
                  </label>
                </div>               
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="public/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="public/backend/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
