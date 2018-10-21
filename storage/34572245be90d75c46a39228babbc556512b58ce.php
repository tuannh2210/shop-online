<?php $__env->startSection('content'); ?>
<h3>List Product</h3>
<table id="example1" class="table table-stripped table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Category</th>
			<th>Name</th>
			<th>Images</th>
			<th>Price</th>
			<th width="300">Details</th>
			<th>Onwer</th>

			<th class="text-center">
				<a href="<?php echo e(getUrl('add-product')); ?>" class="">
					Add new
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($p->id); ?></td>
				
				<td>
					<a href="<?php echo e(getUrl('cate-pro')); ?>?id=<?php echo e($p->cate()->id); ?>"><?php echo e($p->cate()->cate_name); ?></a>
				</td>
				<td><?php echo e($p->name); ?></td>
				<td>
					<img src="app/views/product/uploads/<?php echo e($p->feature_image); ?>" width="100px">
				</a>
				</td>
				<td><?php echo e($p->price); ?></td>
				<td><?php echo e($p->detail); ?></td>
				<td>
					<a href="<?php echo e(getUrl('user-pro')); ?>?id=<?php echo e($p->owner()->id); ?>"><?php echo e($p->owner()->name); ?></a>
				</td>
				<td class="text-center">
					<a class="btn btn-info " href='<?php echo e(getUrl("update-product?id=$p->id")); ?>' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='<?php echo e(getUrl("remove-product?id=$p->id")); ?>' ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</tbody>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>