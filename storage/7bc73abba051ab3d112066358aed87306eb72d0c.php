<?php $__env->startSection('conten-header'); ?>
	 <h1>
        All user<small>List user</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboardt</li>
      </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h3>List User</h3>
<table class="table table-stripped table-bordered table-hover ">
	<thead>
		<tr >
			<th>#</th>
			<th>NAME</th>
			<th>AVATAR</th>
			<th>EMAIL</th>
			<th>Tolal Product</th>
			<th class="text-center">
				
			</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value->id); ?></td>
				<td><?php echo e($value->name); ?></td>
				<td>
					<img src="app/views/user/uploads/<?php echo e($value->avatar); ?>" width="100px" class="img-circle">
				</td>
				<td><?php echo e($value->email); ?></td>
				<td><?php echo e($value->getConutProduct()); ?></td>
				<td class="text-center">
					<a class="btn btn-info" href='<?php echo e(getUrl("update-user?id=$value->id")); ?>' >
						<i class="fa fa-edit" aria-hidden="true"></i>
					</a>
					<a class="btn btn-danger" href='<?php echo e(getUrl("remove-user?id=$value->id")); ?>' >
						<i class="fa fa-trash" aria-hidden="true"></i>
					</a>

				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>