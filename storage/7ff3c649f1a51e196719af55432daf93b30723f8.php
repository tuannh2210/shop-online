<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="container">
			<ol class="breadcrumb">
				 <li><a href="<?php echo e(getUrl('/')); ?>">Home</a></li>
				 <li class="active">Fashion</li>
			</ol>
			<div class="cart-div" >
				<p class="title-cart"></p>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="#" id="info-pro">
	            			<div class="product-item">
	                            <div class="img-item">
		                                <?php if($value->feature_image): ?>
	                            		 <img src="app/views/product/uploads/<?php echo e($value->feature_image); ?>">
		                                <?php endif; ?>
	                            </div>
	                            <div class="info-item">
	                                <p class="pro-name"><?php echo e($value->name); ?></p>
	                                <p class="price">$ <?php echo e($value->price); ?>.00</p>
	                            </div>
	                            <div class="btn-control">
	                                <button class="hover "><i class="fa fa-exchange"></i></span>
	                                </button>
	                                <a href='<?php echo e(getUrl("add-to-card?id=$value->id")); ?>'><button type="" >ADD TO CART </button>
	                                </a>	

	                                
	                                <button class="hover"><i class="fa fa-heart-o"></i></button>
	                            </div>
	                        </div>
	                    </a>    
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>			
<?php echo $__env->make('client-layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>