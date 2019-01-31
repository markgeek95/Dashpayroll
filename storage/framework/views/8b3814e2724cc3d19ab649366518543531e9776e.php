<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Rest Day Table
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">


        <?php echo $__env->make('maintenance.other_setup.holiday.rest_day_new', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <div class="tab">
            <?php echo $__env->make('maintenance.other_setup.holiday.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>



        <div class="container-fluid mt-10">
            <div class="row">
                <div class="col-xs-11 ml-17 panelfk mb-20">
                    <div class="alert alert-primary col-xs-12">
                        <strong> Rest Day Table Lists</strong>
                    </div>
                    <div class="col-xs-12 clearfix">
                        <div class="table-responsive">

                            <div class="wrapper col-xs-6">
                                <div class="col-xs-4 myBtndiv">
                                    <button type="submit" class="btn btn-success btn-sm"
                                            v-on:click="rest_day_new">
                                        <i class="fa fa-plus" aria-hidden="true"></i> New
                                    </button>
                                </div>
                            </div>

                            <table class="table table-bordered" id="holidayTableList">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Day</th>
                                    <th>Rest Day</th>
                                    <th>Shift</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody id="updateTable">
                                <?php if(!$rest_day->isEmpty()): ?>
                                    <?php $__currentLoopData = $rest_day; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($row->code); ?></td>
                                            <td><?php echo e($row->description); ?></td>
                                            <td><?php echo e(Carbon::parse($row->date)->format('D')); ?></td>
                                            <td><?php echo e(Carbon::parse($row->date)->toFormattedDateString()); ?></td>
                                            <td><?php echo e($row->name); ?></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">
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





















