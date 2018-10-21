<?php $__env->startSection('content'); ?>
<div class="container  ">
	<form action="<?php echo e(getUrl('post-save-product')); ?>" method="post" enctype="multipart/form-data" id="form" class="row" >

		<div  class="col-sm-6 col-sm-offset-3">
			<h3>Add Product</h3>
			<div class="form-group">	
				<label>Categry</label>
				<select name="cate_id" class="form-control">
					<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option	value="<?php echo e($c->id); ?>"><?php echo e($c->cate_name); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="form-group">
				<label>Product Name</label>
				<input 	type="text" name="name" class="form-control" placeholder="Product Name"  >
			</div>
			<div class="form-group">	
				<label>Product Price</label>
				<input 	type="number" name="price" value="1" class="form-control" placeholder="Product Price"  >
			</div>
			<div class="form-group">	
				<label>Images</label>
				<input 	type="file" name="feature_image" value="" class="form-control" placeholder="Product Price"  >
				 <img id="blah" src="#" width=200px >
			</div>

			<div class="form-group">	
				<label>Product detail</label>
				<textarea name="detail" class="form-control" value="feuhuheuhfueh" placeholder="dfhudh"></textarea>
			</div>
			<div class="form-group">	
				<label>Owner</label>
				<select name="created_by" class="form-control">
					<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option	value="<?php echo e($u->id); ?>"> <?php echo e($u->name); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<div class="text-center">
				<a href="<?php echo e(getUrl('product')); ?>" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-info">Save</button>
			</div>
		</div>

		
<?php $__env->stopSection(); ?>
			<!-- <div  class="col-sm-6 ">
				<h4>Product images</h4>
				<ol>
					<input type='file'></input><br>
				</ol>
				<button id="btn2" >Add Images</button>
			</div>
		</form>
	</div>
</div>
	<script>
	$(document).ready(function(){
	    $("#btn2").click(function(){
	        $("ol").append("<input type='file'> </input><br>");
	    });
	});
	</script> -->

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>