<?php $__env->startSection('conten-header'); ?>
	 <h1>
        Product User<small>Control pannel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboardt</li>
      </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-stripped table-bordered ">
	<thead>
		<tr>
			<th>ID</th>
			<th>CATEGORY</th>
			<th>NAME</th>
			<th>IMAGE</th>
			<th>PRICE</th>
			<th width="300px">DETAIL</th>
			<th >OWNER</th>
			<th class="text-center">
				<a href="<?php echo e(getUrl('add-product')); ?>" >Add new</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value->id); ?></td>
				<td>
					<a href="<?php echo e(getUrl('cate-pro')); ?>?id=<?php echo e($value->cate()->id); ?>"><?php echo e($value->cate()->cate_name); ?></a>
				</td>
				<td><?php echo e($value->name); ?></td>
				<td>
					<img src="app/views/product/uploads/<?php echo e($value->feature_image); ?>" width="100px">
				</td>
				<td><?php echo e($value->price); ?></td>
				<td><?php echo e($value->detail); ?></td>
				<td><?php echo e($_SESSION['OWNER']=$value->owner()->name); ?></td>
				<td class="text-center">
					<a class="btn btn-info glyphicon glyphicon-edit" href='<?php echo e(getUrl("update-product?id=$value->id")); ?>' ></a>
					<a class="btn btn-danger glyphicon-trash glyphicon" href='<?php echo e(getUrl("remove-product?id=$value->id")); ?>' ></a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		
	</tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>