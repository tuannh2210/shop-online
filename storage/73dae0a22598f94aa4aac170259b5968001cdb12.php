<?php $__env->startSection('content'); ?>
<H3>List Category</H3>
<table class="table table-stripped table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Category</th>
			

			<th class="text-center">
				<a href="<?php echo e(getUrl('add-cate')); ?>" class="">
					Add new
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($p->id); ?></td>
				
				<td><?php echo e($p->cate_name); ?></td>
				
				<td class="text-center">
					<a class="btn btn-info " href='<?php echo e(getUrl("update-cate?id=$p->id")); ?>' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='<?php echo e(getUrl("remove-cate?id=$p->id")); ?>' ><i class="fa fa-trash" aria-hidden="true"></i></a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>