<div id="wrapper">
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation">

        <?php echo $__env->make('partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </nav>
</div>



<div id="vue-app">

    <?php echo $__env->yieldContent('content'); ?>

</div>













