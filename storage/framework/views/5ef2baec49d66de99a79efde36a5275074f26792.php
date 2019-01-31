<div class="col-xs-12 mb-20 paneltable">
    <div class="alert alert-primary">
        <strong>Employee List </strong>
    </div>

    <div class="table-responsive">

        <div class="col-xs-6 button-groups">
            <a href="<?php echo e(url('employee/create')); ?>">
                <button class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                    <strong> New </strong>
                </button>
            </a>
        </div>


        <table class="table table-bordered mt-50" id="EmployeeTable">
            <thead>
            <tr class="thead-primary">
                <th>Employee ID</th>
                <th>Name</th>
                <th>Actions</th>
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