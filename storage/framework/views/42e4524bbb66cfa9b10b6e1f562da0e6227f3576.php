<div class="col-xs-12 mb-20 paneltable mt-40">
    <div class="alert alert-primary">
        <strong>Department List</strong>
    </div>


    <button type="button" class="btn btn-success btn-sm"
    v-on:click="departments_new_open_modal">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        <strong> New </strong>
    </button>

    <div class="table-responsive mt-10">
        <table class="table table-bordered ">
            <thead>
            <tr class="thead-primary">
                <th>Department</th>
            </tr>
            </thead>
            <tbody>
                <?php if(!$departments->isEmpty()): ?>
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($department->name); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td>
                            <strong class="text-danger">No departments found.</strong>
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>