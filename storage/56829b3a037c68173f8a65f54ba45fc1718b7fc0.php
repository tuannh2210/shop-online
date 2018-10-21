<?php $__env->startSection('content'); ?>
<div class="not-found">
  <h4><strong>Nội dung bạn tìm kiếm không tồn tại</strong></h4><hr>
  <p>Bạn hãy thử một trong các cách dưới đây:<br>
    Sử dụng chức năng tìm kiếm để tìm nội dung bạn cần.<br>
    Nếu bạn chắc chắn đây là lỗi, hãy báo cho chúng tôi để Genk ngày càng hoàn thiện hơn.</p>

  <img src="<?php echo e(getUrl('public/img/404.jpg')); ?>" >
  <p>Quay trở lại <a href="<?php echo e(getUrl('')); ?>">trang chủ</a> để xem các thông tin mới nhất trên website</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>