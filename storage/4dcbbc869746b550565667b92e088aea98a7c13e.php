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
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
   <!--  -->
    <form action="<?php echo e(getUrl('forgot-submit')); ?>" method="post">
      <span class="text-danger"><?php echo e($msg); ?> </span>
      <div class="form-group has-feedback">
        <input type="type" class="form-control" name="email" placeholder="Email">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    <a href="<?php echo e(geturl('register')); ?>" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo e(getUrl('public/plugins/jQuery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(getUrl('public/plugins/iCheck/square/blue.css')); ?>"></script>

<!-- iCheck -->
<script src="<?php echo e(getUrl('public/plugins/iCheck/icheck.min.js')); ?>"></script>
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
