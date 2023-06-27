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
<div>
    <a href="<?php echo e(asset('/')); ?>">Home</a>
    <a href="<?php echo e(asset('/ucas')); ?>"> ucas</a>
    <a href="<?php echo e(asset('/student')); ?>">student</a>
</div>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>

<?php /**PATH C:\xamppo\htdocs\mohammed10\resources\views/layout.blade.php ENDPATH**/ ?>