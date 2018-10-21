<?php $__env->startSection('content'); ?>
<table class="table table-stripped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th> QUANTITY </th>
			<th> TOTAL </th>
		</tr>
	</thead>
	<tbody>
			<?php 
				$totalCartPrice = 0;
			?>
			<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value['id']); ?></td>
				<td><?php echo e($value['name']); ?></td>
				<td><?php echo e($value['price']); ?></td>
				<td><input type="number	" name="quantity" value="<?php echo e($value['quantity']); ?>" placeholder="">
				</td>
				<td>
					<?php echo e($value['quantity']*$value['price']); ?>

				</td>
				<?php 
					$totalCartPrice += $value['quantity']*$value['price'];
				?>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td colspan="4">Total price</td>
			<td><?php echo e($totalCartPrice); ?></td>
		</tr>
		
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>