<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="container">
			<ol class="breadcrumb">
					 <li><a href="<?php echo e(getUrl('/')); ?>">Home</a></li>
					 <li class="active">Cart</li>
			</ol>
			<div class="cart-div" >
				<p class="title-cart">CART</p>
				<table class="table table-bordered">
					<tr>
						<th width="70"></th>
						<th >PRODUCT</th>
						<th class="pro-img" width="230">IMAGES</th>
						<th >PRICE</th>
						<th class="pro-quantity">QUANTITY</th>
						<th >TOTAL</th>
					</tr>
					<tr>
						<?php 
							$totalCartPrice = 0;
						?>
						<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><a href="#"><span class="glyphicon glyphicon-remove" ></span></a></td>
							<td><?php echo e($value['name']); ?></td>
							<td><img src="app/views/product/uploads/<?php echo e($value['feature_image']); ?>"></td>
							<td><?php echo e($value['price']); ?></td>
							<td><?php echo e($value['quantity']); ?></td>
							<td>
								<?php echo e($value['quantity']*$value['price']); ?>

							</td>
							<?php 
								$totalCartPrice += $value['quantity']*$value['price'];
							?>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tr>
					<tr>
						<td colspan="6">
							<input type="text"  placeholder="Coupon code" style="float: left">
							<input type="submit" value="Aplly coupon" style="float: left ; margin-left: 10px">
							<input type="submit" class="up-cart" value="Update cart" disabled="disabled">
						</td>
					</tr>
				</table>
			</div>
			<div class="total col-lg-4 col-lg-offset-8">
				<table class="table">
					<caption>Cart totals</caption>
						<tr>
							<td>Subtotal</td>
							<td class="price">$ <?php echo e($_SESSION['TOTAL']=$totalCartPrice); ?> </td>

						</tr>
						<tr>
							<td>Total</td>
							<td> $ <?php echo e($_SESSION['TOTAL']=$totalCartPrice); ?> </td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="button">Proceed to checkout</button>
							</td>
						</tr>
				</table>
			</div>
		</div>
	</div>	
<?php $__env->stopSection(); ?>			
<?php echo $__env->make('client-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>