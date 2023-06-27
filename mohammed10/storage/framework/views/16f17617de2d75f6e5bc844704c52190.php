<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(asset('/')); ?>">Home</a>
        <a href="<?php echo e(asset('/ucas')); ?>"> ucas</a>
        <a href="<?php echo e(asset('/student')); ?>">student</a>
    </div>
    <h2>121211</h2>
<?php $__env->stopSection(); ?>
</body>
</html>





<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppo\htdocs\mohammed10\resources\views/ucas.blade.php ENDPATH**/ ?>