<?php $__env->startSection('content'); ?>
<div id="content">
    <?php echo e($showContent ['conten1']); ?>

    <?php echo e($showContent ['conten2']); ?>

    <?php echo e($showContent ['conten3']); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>