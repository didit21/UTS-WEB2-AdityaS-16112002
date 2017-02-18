<?php $__env->startSection('content'); ?>
<div id="content">
    <?php echo e($showContent ['conten3']); ?>

    <?php echo e($showContent ['conten3']); ?>

    <?php echo e($showContent ['conten3']); ?>

    <br>Semua Kritik dan Saran :<br>
    <table>
        <tr>
            <td align="center" width="120">Nama Lengkap</td>
            <td align="center" width="100">No. Telpon</td>
            <td align="center" width="300">Kritik & Saran</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('temp.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>