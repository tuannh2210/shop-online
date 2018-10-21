<?php $__env->startSection('content'); ?>
<div class="container row justify-content-center">
	<div class="col-sm-6 col-sm-offset-3">
		<h3>Add User</h3>
		<form action="<?php echo e(getUrl('post-save-user')); ?>" method="post" id=form>
			<div class="form-group">
				<label>User Name</label>
				<input 	type="text" name="name"  class="form-control" placeholder="User Name" >
			</div>
			<div class="form-group">	
				<label>Email</label>
				<input name="email"  class="form-control" placeholder="abc@gmail.com" >
			</div>
			<!-- <div class="form-group">	
				<label>User Detail </label>
				<input 	type="text" name="detail"  class="form-control" placeholder="Product Price">
			</div> -->
			<div class="form-group">	
				<label>Password</label>
				<input type="password" 	 name="pass"  class="form-control" placeholder="Password">
			</div>
			<div class="form-group">	
				<label>Confirm password</label>
				<input 	type="password" name="cfpass"  class="form-control" placeholder="Confirm password">
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