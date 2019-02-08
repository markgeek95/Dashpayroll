<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('public/css/font-awesome.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/toastr/toastr.min.css')); ?>" />
    
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/datatables.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/btnripple.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/animate.css')); ?>" />
    
    <link rel="stylesheet" href="<?php echo e(asset('public/css/burgerIcon.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/hover.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/styledatatable.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/custom.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/holidayAndRestday.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/maintenance.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/admin_css.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/select2/dist/css/select2.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/lte/adminlte.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('public/master.css')); ?>" />


    
    <?php echo $__env->yieldContent('pagestyle'); ?>


</head>
<body>




<?php echo $__env->make('messages.window_loader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->yieldContent('template'); ?>







<script src="<?php echo e(asset('public/plugins/vue/vue.js')); ?>"></script>

<script src="<?php echo e(asset('public/plugins/js/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/datatables.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/burger.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/metisMenu.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/plugins/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/datatableOn.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/sweetalert2.all.min.js')); ?>"></script>

<!-- <script src="<?php echo e(asset('public/plugins/lte/adminlte.min.js')); ?>"></script> -->

<script src="<?php echo e(asset('public/plugins/toastr/toastr.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/plugins/select2/dist/js/select2.full.min.js')); ?>"></script>


<?php echo $__env->yieldContent('pluginscript'); ?>

<script src="<?php echo e(asset('public/plugins/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/modal.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/maintenance.js')); ?>"></script>
<script src="<?php echo e(asset('public/plugins/js/holidayrestday.js')); ?>"></script>

<?php echo $__env->make('messages.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script src="<?php echo e(asset('public/vue/vue-app.js')); ?>"></script>

<script src="<?php echo e(asset('public/master.js')); ?>"></script>



<?php echo $__env->yieldContent('pagescript'); ?>


</body>
</html>
