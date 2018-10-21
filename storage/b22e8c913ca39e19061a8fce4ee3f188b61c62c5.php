<?php
// session_start();
?>

<?php $__env->startSection('content'); ?>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="text-center">
				 <h1>Hello Mr.<?php echo e($value->name); ?></h1>
			 <img src="app/views/user/uploads/<?php echo e($value->avatar); ?>" class="img-circle img-thumbnail" style="margin-top: 50px">
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>