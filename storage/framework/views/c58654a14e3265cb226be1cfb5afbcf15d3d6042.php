<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Statutory Deduction Schedule
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">



        <?php echo $__env->make('maintenance.statutory_deduction_schedule.statutory_deduction_schedule_add', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('maintenance.statutory_deduction_schedule.statutory_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <div class="container-fluid ml-17 mr-10">
            <div class="row">
                <div class="col-sm-12 mt-20 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Statutory Deduction Table</strong>
                    </div>
                    <div class="table-responsive">
                        <div class = "col-xs-6 button-groups">
                            <button class="btn btn-success btn-sm" v-on:click="statutory_add_modal">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <strong> New </strong>
                            </button>
                        </div>


                        <table class="table table-bordered" id="StatutoryTable">
                            <thead>
                                <tr class="thead-primary">
                                    <th>Code</th>
                                    <th>Frequency</th>
                                    <th>Deduction Name</th>
                                    <th>Deduction Count</th>
                                    <th>Day of Deduction</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!$data->isEmpty()): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($row->code); ?></td>
                                        <td><?php echo e($row->name); ?></td>
                                        <td><?php echo e($row->deduction_name); ?></td>
                                        <td><?php echo e($row->deduction_count); ?></td>
                                        <td><?php echo e($row->days_of_deduction); ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"
                                                    v-on:click="statutory_edit(<?php echo e($row->id); ?>)">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger"
                                                    v-on:click="global_delete(<?php echo e($row->id); ?>, 'statutory_delete')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
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











        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescript'); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















