<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    

    <div class="container">
        <h1 style="text-align: center;" class="text-4xl font-bold text-slate-400 mb-6">Website Product</h1>
        <?php echo $__env->yieldContent('content_master'); ?>
    </div>

</body>
</html><?php /**PATH D:\courses\UMPTN\Frameworks\Laravel\tugasupload\resources\views/master.blade.php ENDPATH**/ ?>