<div class="alert alert-primary col-xs-12 ">
    <strong> Employee Status</strong>
</div>
<div class="col-xs-6 col-md-3 clearfix" style="margin-left: -1.5%;">
    <div class="table-responsive">
        <div class="wrapper col-xs-5">
            <div class="col-xs-3 myBtndiv mb-10">
                <button type="submit" class="btn btn-success"
                v-on:click="open_employee_status_new_modal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> New
                </button>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr class="active">
                <th>Description</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!$employee_status->isEmpty()): ?>
                <?php $__currentLoopData = $employee_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->description); ?></td>
                        <td><?php echo e(($row->status)? 'Active' : 'None-Active'); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="2">
                        <strong class="text-danger">No cost center found.</strong>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>