<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Banks
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">





        <?php echo $__env->make('maintenance.other_setup.banks.banks_tab', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('maintenance.other_setup.banks.banks_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>





        <div class="container-fluid mr-10 ml-17 mt-40">

            <div class="row">
                <div class="col-xs-12 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Bank List</strong>
                    </div>
                    <div class="table-responsive">

                        <div class="col-xs-6 button-groups">
                            <a class="btn btn-sm btn-success" href="<?php echo e(url('banks/create')); ?>">
                                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                <strong>New</strong>
                            </a>
                        </div>


                        <table class="table table-bordered mt-50" id="BanksTable">
                            <thead >
                            <tr class="active">
                                <th>ID</th>
                                <th>Bank Name</th>
                                <th>RDO</th>
                                <th>Address</th>
                                <th>Servicing Branch Code</th>
                                <th>Payroll Branch Code</th>
                                <th>Bank Code</th>
                                <th>Company Code</th>
                                <th>Batch No.</th>
                                <th>Presenting Office</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!$data->isEmpty()): ?>

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($bank->bank_name); ?></td>
                                        <td><?php echo e($bank->rdo); ?></td>
                                        <td><?php echo e($bank->address); ?></td>
                                        <td><?php echo e($bank->servicing_branch_code); ?></td>
                                        <td><?php echo e($bank->payroll_branch_code); ?></td>
                                        <td><?php echo e($bank->batch_code); ?></td>
                                        <td><?php echo e($bank->company_code); ?></td>
                                        <td><?php echo e($bank->batch_no); ?></td>
                                        <td><?php echo e($bank->presenting_office); ?></td>

                                        <td class="text-center col-xs-1">
                                            <button class="btn btn-primary btn-sm"
                                                v-on:click="banks_edit(<?php echo e($bank->id); ?>)">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>&nbsp;
                                            <button class="btn btn-sm btn-danger"
                                                    v-on:click="global_delete(<?php echo e($bank->id); ?>, 'bank_delete')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <tr>
                                    <td colspan="11" class="text-red text-center">
                                        <strong>
                                            Banks table is currently empty.
                                        </strong>
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





















