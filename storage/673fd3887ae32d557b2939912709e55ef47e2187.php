<?php $__env->startSection('content'); ?>
<table class="table table-stripped table-bordered ">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>DETAIL</th>
			<th>OWNER</th>
			<th class="text-center">
				<a href="<?= getUrl('add-product') ?>" class="btn btn-info glyphicon glyphicon-plus"></a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value->id); ?>?></td>
				<td><?php echo e($value->name); ?></td>
				<td><?php echo e($value->price); ?></td>
				<td><?php echo e($value->image); ?></td>
				<td><?php echo e($value->detail); ?></td>
				<td><?php echo e($value->owner()->name); ?></td>
				<td class="text-center">
					<a class="btn btn-info glyphicon glyphicon-edit" href='<?php echo e(getUrl("update-product?id=$value->id")); ?>' ></a>
					<a class="btn btn-danger glyphicon-trash glyphicon" href='<?php echo e(getUrl("remove-product?id=$value->id")); ?>' ></a>
					<a class="btn btn-danger " href='<?php echo e(getUrl("add-to-card?id=$value->id")); ?>' >Add To Card</a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>