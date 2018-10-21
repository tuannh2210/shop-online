<?php
$msg = isset($_GET['msg']) == true ? $_GET['msg'] : "";
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/AdminLTE/css/AdminLTE.min.css')); ?>">
  <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/iCheck/square/blue.css')); ?>">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo e(getUrl('/')); ?>"><b>Tuan's</b>SHOP</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <form id="form" action="<?php echo e(getUrl('save-register')); ?>" method="post"  >
      <span class="text-danger"><?php echo e($msg); ?> </span>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Usersname">
        <i class="glyphicon glyphicon-user form-control-feedback"></i>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="cfpass" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="<?php echo e(getUrl('login')); ?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo e(getUrl('public/plugins/jQuery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(getUrl('public/plugins/iCheck/square/blue.css')); ?>"></script>
    <script src="<?php echo e(getUrl('public/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>

<!-- iCheck -->
<script src="<?php echo e(getUrl('public/plugins/iCheck/icheck.min.js')); ?>"></script>
<script src="<?php echo e(getUrl('public/js/main.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

