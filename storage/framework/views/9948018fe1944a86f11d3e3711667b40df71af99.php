<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Leave Table
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">


        <?php echo $__env->make('maintenance.leave_table.leave_new', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('maintenance.leave_table.leave_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <div class="container-fluid ml-17 mr-10">
            <div class = "row">
                <div class="col-sm-12 mt-20 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Leave Table</strong>
                    </div>
                    <div class="table-responsive">

                        <div class="col-xs-6 button-groups">
                            <button type="button" class="btn btn-success btn-sm"
                                    v-on:click.prevent="leave_new_open">
                                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                <strong> New </strong>
                            </button>
                        </div>



                        <table class="table table-bordered mt-50" id="LeaveTable">
                            <thead>
                            <tr class="active">
                                <th>Code</th>
                                <th>Name</th>
                                <th>Allocated</th>
                                <th>Months</th>
                                <th>Carry Over</th>
                                <th>Cash Convertible</th>
                                <th>Max Hours to Convert</th>
                                <th>Convetible Non-taxable Hours</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!$data->isEmpty()): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row->code); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->allocated); ?></td>
                                <td><?php echo e($row->months); ?></td>
                                <td><?php echo e(($row->carry_over == 'Y')? 'Yes' : 'No'); ?></td>
                                <td><?php echo e(($row->cash_convertible == 'Y')? 'Yes' : 'No'); ?></td>
                                <td><?php echo e($row->max_hours_to_convert); ?></td>
                                <td><?php echo e($row->convertible_non_taxable_hours); ?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary"
                                    v-on:click="leave_edit(<?php echo e($row->id); ?>)">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>&nbsp;
                                    <button class="btn btn-sm btn-danger"
                                            v-on:click="global_delete(<?php echo e($row->id); ?>, 'leave_delete')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4">
                                        <strong class="text-danger">No data available on table.</strong>
                                    </td>
                                </tr>
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





















