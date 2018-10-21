<?php $__env->startSection('content'); ?>
<div class="container row justify-content-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h3>Add Category</h3>
		<form action="<?php echo e(getUrl('save-update-cate')); ?>" method="post"  id="form">
			<input type="hidden" name="id" value="<?php echo e($model->id); ?>"  >
			<div class="form-group">
				<label>Category Name</label>
				<input 	type="text" name="cate_name"  class="form-control" value="<?php echo e($model->cate_name); ?> " placeholder="Category">
			</div>
			<div class="text-center">
				<a href="<?php echo e(getUrl('user')); ?>" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</form>
	</div>
	
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>