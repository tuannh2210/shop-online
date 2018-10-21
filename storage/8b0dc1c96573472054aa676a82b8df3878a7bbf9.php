<?php
// session_start();
?>

<?php $__env->startSection('title', 'Category management'); ?>
<?php $__env->startSection('content'); ?>
<div class="container  ">
	<form action="<?php echo e(getUrl('save-update-product')); ?>" method="post" enctype="multipart/form-data" id="form" class="row" >
		<div  class="col-sm-6 col-sm-offset-3">
			<h3>Update Product</h3>
			<input type="hidden" name="id" value="<?php echo e($model->id); ?>">
			<div class="form-group">	
				<label>Categry</label>
				<select name="cate_id" class="form-control">
					<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option 
							<?php if($c->id == $model->cate_id): ?>
								selected 
							<?php endif; ?>
								value="<?php echo e($c->id); ?>"><?php echo e($c->cate_name); ?>

						</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" value="<?php echo e($model->name); ?>"  class="form-control" placeholder="Product Name"  >
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" value="<?php echo e($model->price); ?>"  class="form-control" placeholder="Product Price" >
			</div>
			<div class="form-group">	
				<label>Images</label>
				<input 	type="file" name="feature_image" value="<?php echo e($model->feature_image); ?>"  class="form-control" placeholder="Product Price"  >
				 <img id="blah" src="app/views/product/uploads/<?php echo e($model->feature_image); ?>"  width=200px >
			</div>

			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control" ><?php echo e($model->detail); ?></textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option 
							<?php if($u->id == $model->created_by): ?>
								selected 
							<?php endif; ?>
								value="<?php echo e($u->id); ?>">
								<?php echo e($u->name); ?>

						</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="text-center">
				<a href="<?php echo e(getUrl('product')); ?>" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</div>

		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>