<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Class List
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">





        <?php echo $__env->make('partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <div class="container-fluid mt-10">
            <div class="row">


                <div class="col-xs-11 ml-17 mb-20 panelfk ">

                    <div class="alert alert-primary col-xs-12 ">
                        <strong> Class List</strong>
                    </div>



                <?php echo $__env->make('maintenance.other_setup.class_list.class_list', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo $__env->make('maintenance.other_setup.class_list.employee_list', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>



                </div>

            </div>
        </div>










        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescript'); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















