<div class="col-xs-11 col-md-9 clearfix" style="margin-left: -1.5%;">
    <div class="table-responsive">
        <div class="wrapper col-xs-12">
        </div>
        <table class="table table-bordered table-md" id="emlistTable">
            <thead>
            <tr class="active">
                <th>Employee Id</th>
                <th>Name</th>
                <th class="updateTh">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!$employees->isEmpty()): ?>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($employee->id_number); ?></td>
                        <td>
                            <?php echo e($employee->last_name.', '.$employee->first_name.' '.
                        $employee->suffix.' '.$employee->middle_name); ?>

                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-sm btn-success">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </button>&nbsp;
                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td>
                        <strong class="text-danger">
                            No employee found.
                        </strong>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>