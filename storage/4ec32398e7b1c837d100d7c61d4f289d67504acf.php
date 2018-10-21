<?php $__env->startSection('content'); ?>
	<form action="<?php echo e(getUrl('forgot-submit')); ?>" method="post">
		<input type="text" class="form-control" name="email" value="" placeholder="Your email">
		<button type="submit" class="btn btn-info text-center">Submit</button>
	</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>