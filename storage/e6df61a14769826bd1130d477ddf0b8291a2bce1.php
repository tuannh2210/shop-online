<?php $__env->startSection('content'); ?>
<div class="container row justify-content-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h3>Update User</h3>
		<form action="<?php echo e(getUrl('save-update-user')); ?>" method="post" enctype="multipart/form-data" id="form">
			<input type="hidden" name="id" value="<?php echo e($model->id); ?>"  >
			<div class="form-group">
				<label>User Name</label>
				<input 	type="text" name="name"  class="form-control"  value="<?php echo e($model->name); ?>" >
			</div>
			<div class="form-group">	
				<label>Email</label>
				<input name="email"  class="form-control"  value="<?php echo e($model->email); ?>"  >
			</div>
			<div class="form-group">	
				<label>Avatar </label>
				<input 	type="file" name="avatar"  class="form-control" placeholder="Avatar	">
				 <img id="blah" src="app/views/user/uploads/<?php echo e($model->avatar); ?>"  width=200px >
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