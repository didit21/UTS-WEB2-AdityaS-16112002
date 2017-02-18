<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="<?php echo asset('../css/style.css'); ?>">
    </head>
    <body>
        <?php echo $__env->make('temp.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('temp.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
