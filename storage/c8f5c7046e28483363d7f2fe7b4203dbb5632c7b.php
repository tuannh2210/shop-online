<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(getUrl('public/css/main.css')); ?>">
</head>
<body>
    <div class="site"> 
        <nav class="navbar navbar-inverse">
            <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" style="color: #fff">Dashboard</a>
                </div>
                
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-4">
                    <ul class="nav navbar-nav navbar-right ">
                         <li><a href='<?php echo e(getUrl("admin")); ?>'>Home</a></li>
                        <li><a href='<?php echo e(getUrl("user")); ?>'>User</a></li>
                        <li><a href='<?php echo e(getUrl("product")); ?>'>Product</a></li>
                        <li><a href='<?php echo e(getUrl("category")); ?>'>Category</a></li>
                        <li>
                          <a class="btn btn-default btn-outline btn-circle" href='<?php echo e(getUrl("logout")); ?>' >Logout <i class=""></i> </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <div class="container text-right">
        </div>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>  
        
    </div>
</body>


    <script src="<?php echo e(getUrl('public/plugins/jquery/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(getUrl('public/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <script src="<?php echo e(getUrl('public/plugins/datatables.net/js/jquery.dataTables.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(getUrl('public/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(getUrl('public/plugins/bootbox/bootbox.min.js')); ?>" type="text/javascript"></script>
    
    <script src="<?php echo e(getUrl('public/plugins/ckeditor/ckeditor.js')); ?>" type="text/javascript"></script>


    
    <script src="<?php echo e(getUrl('public/js/main.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript">
         $(function () {
            CKEDITOR.replace('detail')
          })
    </script>
</html>
