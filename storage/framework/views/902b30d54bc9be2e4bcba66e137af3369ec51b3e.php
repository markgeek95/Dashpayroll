<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Payroll User
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

        <div class="tab">
            <?php echo $__env->make('admin.payroll_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="container-fluid">

            <div class="col-md-12 mt-20" id="companyform">
                <div class="row container_style" >
                    <h2 class="text-info">
                        <i class="fa fa-users"></i> Payroll User
                    </h2>

                    <div id="tableSort" class="table-responsive panelcontent mt-40">

                        <div class = "col-xs-6 button-groups" style="z-index: 100">

                                <a href="<?php echo e(url('new_payroll_user')); ?>" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> New
                                </a>

                            <button class="btn btn-info btn-file">
                                <i class="glyphicon glyphicon-cloud-upload"></i> Import
                                <input type="file" multiple>
                            </button>

                        </div>

                        <table class="table table-bordered" id="dadasTable" >
                            <thead>
                                <tr class="active">
                                    <th>Code</th>
                                    <th>User Level</th>
                                    <th>User Name</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php if(!$users->isEmpty()): ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->code_id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->username); ?></td>
                                    <td><?php echo e($user->last_name.' '.$user->first_name.' '.$user->middle_name); ?></td>

                                    <?php
                                        $pass = App\Secret::decrypt_pass($user->uid);
                                    ?>

                                    <td class="text-center">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="password" class="form-control password_holder"
                                                       value="<?php echo e($pass); ?>" readonly="">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary btn-default"
                                                            type="button" v-on:click="decrypt_encrypt($event)">
                                                            <span class="fa fa-eye-slash"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <a href="adminv2/viewpayrolluser/">
                                            <a href="<?php echo e(url('new_payroll_user/'.$user->uid.'/edit')); ?>"
                                               class="btn btn-default btn-sm">
                                                <i class="fa fa-book fa-sm"></i> View
                                            </a>
                                        </a>
                                        <a href="<?php echo e(url('new_payroll_user/'.$user->uid.'/edit')); ?>"
                                           class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o fa-sm"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>

                            <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid mt-20">
        </div>


        


    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescript'); ?>
    <script src="<?php echo e(asset('public/js/admin/new_payroll_user.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>


















