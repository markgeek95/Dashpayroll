<div class="col-xs-6 col-md-3 clearfix" style="margin-left: -1.5%;">
    <div class="table-responsive">


        <div class="wrapper col-xs-4">
            <div class="col-xs-3 myBtndiv mb-10">
                <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add
                </button>
            </div>
        </div>


        <table class="table table-bordered">
            <thead>
            <tr class="active">
                <th>Class</th>
            </tr>
            </thead>
            <tbody>

            <?php if(!$class_list->isEmpty()): ?>
                <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($row->name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center">
                        <strong class="text-danger">No cost center found.</strong>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>