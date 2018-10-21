<?php $__env->startSection('content'); ?>
<h3>All product	</h3>
<table class="table table-stripped table-bordered ">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Images</th>
			<th>Details</th>
			<th>Onwer</th>
			<th class="text-center">
				<a href="<?php echo e(getUrl('add-product')); ?>" class="">
					Add new
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value->id); ?></td>
				<td><?php echo e($value->name); ?></td>
				<td><?php echo e($value->price); ?></td>
				<td><?php echo e($value->feature_image); ?></td>
				<td><?php echo e($value->detail); ?></td>
				<td>
					<a href='<?php echo e(getUrl("user-pro?id=$value->owner()->id")); ?>'>
						<?php echo e($value->owner()->name); ?>

					</a>
				</td>
				<td class="text-center">
					<a class="btn btn-info " href='<?php echo e(getUrl("update-product?id=$value->id")); ?>' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='<?php echo e(getUrl("remove-product?id=$value->id")); ?>' ><i class="fa fa-trash" aria-hidden="true"></i></a>
					
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>