<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Overtime Night Differential List
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">




        <?php echo $__env->make('maintenance.other_setup.overtime_nightdifferential.tab', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('maintenance.other_setup.overtime_nightdifferential.overtime_nightdifferential_new', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('maintenance.other_setup.overtime_nightdifferential.overtime_nightdifferential_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container-fluid mt-10">


            <div class="row">
                <div class="col-xs-11 ml-17 panelfk mb-20">
                    <div class="alert alert-primary col-xs-12">
                        <strong> Overtime/ Night Differential List</strong>
                    </div>
                    <div class="col-xs-12 clearfix" style="margin-left: -1.5%;">
                        <div class="table-responsive">
                            <div class="wrapper col-xs-5">
                                <div class="col-xs-12 myBtndiv">
                                    <button type="submit" class="btn btn-success btn-sm"
                                    v-on:click="open_night_differential_modal">
                                        <i class="fa fa-plus" aria-hidden="true"></i> New
                                    </button>
                                </div>
                            </div>
                            <table class="table table-bordered" id="holidayTableList">
                                <thead>
                                <tr class="active">
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>OT (Overtime)</th>
                                    <th>ND (Night Differential)</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody id="updateTable">
                                <?php if(!$data->isEmpty()): ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($row->code); ?></td>
                                            <td><?php echo e($row->description); ?></td>
                                            <td><?php echo e($row->ot); ?></td>
                                            <td><?php echo e($row->nd); ?></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm"
                                                v-on:click="overtime_nightdifferential_edit(<?php echo e($row->id); ?>)">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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





















