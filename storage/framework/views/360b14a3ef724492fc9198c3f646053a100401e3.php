<div class="col-xs-12 mb-20 paneltable mt-40">
    <div class="alert alert-primary">
        <strong>Cost Center List</strong>
    </div>


    <button type="button" class="btn btn-success btn-sm"
            v-on:click="cost_center_new_open_modal">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        <strong> New </strong>
    </button>

    <div class="table-responsive mt-10">
        <table class="table table-bordered ">
            <thead>
            <tr class="thead-primary">
                <th>Cost Center</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!$cost_centers->isEmpty()): ?>
                <?php $__currentLoopData = $cost_centers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost_center): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cost_center->name); ?></td>
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