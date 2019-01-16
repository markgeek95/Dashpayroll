<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        New Payroll User
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

        <div class="tab">
        </div>

        <div class="container-fluid" >

            <form class="form-horizontal addMemberForm" method="POST" action="<?php echo e(url('new_payroll_user')); ?>">

                <?php echo e(csrf_field()); ?>


            <div class="col-md-12 mt-20" id="companyform">
                <div class="row" style="border-right: 2px solid #0265FE;border-left: 2px solid #0265FE;padding:50px;padding-top: 20px;">
                    <h2 class="text-info"> <li class="fa fa-plus"></li> New Payroll User</h2>

                    <div class="tab-pane fade in active mt-40">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-4  text-info" id="textAlign">
                                        Code<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="code" id="code" class="form-control"
                                               placeholder="Code" value="2" readonly="">
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('user_level')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        User Level<span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="user_level" class="form-control">
                                            <option value="">--Select--</option>
                                            <?php $__currentLoopData = $user_levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($user_level->id); ?>"
                                                        <?php if(old('user_level') == $user_level->id): ?> selected <?php endif; ?>>
                                                    <?php echo e($user_level->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('user_level')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('user_level')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('username')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Username <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Enter Username" value="<?php echo e(old('username')); ?>" />
                                        <?php if($errors->has('username')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('username')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('password')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="password" class="form-control"
                                                   placeholder="Enter Password" />
                                            <span class="input-group-addon" style="border-radius: 0"
                                            v-on:click="password_toggle">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('password')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group <?php if($errors->has('last_name')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Last Name<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control"
                                               placeholder="Enter Last Name" value="<?php echo e(old('last_name')); ?>">
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('last_name')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('first_name')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        First Name<span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name"  class="form-control"
                                               placeholder="Enter First Name" value="<?php echo e(old('first_name')); ?>">
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('first_name')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('middle_name')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Middle Name
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="middle_name"  class="form-control"
                                               placeholder="Enter Middle Name" value="<?php echo e(old('middle_name')); ?>">
                                        <?php if($errors->has('middle_name')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('middle_name')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('suffix')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Suffix
                                    </label>
                                    <div class="col-md-8">
                                        <select name="suffix" id="" class="form-control">
                                            <option value="">--Select--</option>
                                            <?php $__currentLoopData = $suffixes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suffix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($suffix->id); ?>"
                                                <?php if(old('suffix') == $suffix->id): ?> selected <?php endif; ?>>
                                                    <?php echo e($suffix->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>





                    <div class="form-horizontal mt-10 center-block clearfix col-md-12">
                        <div class="mt-30">
                            <h2 class="text-info text-center mt-20"> <li class="fa fa-user"></li> User Access</h2>

                            <?php if($errors->has('user_access')): ?>
                                <div class="alert alert-danger">
                                    <label><?php echo e($errors->first('user_access')); ?></label>
                                </div>
                            <?php endif; ?>

                            <table class="table table-bordered mt-30 new_payroll_user_table">
                                <thead>
                                <tr>
                                    <th>Module</th>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th><?php echo e($role->name); ?></th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    

                                    <tr>
                                        <td><?php echo e($menu->name); ?></td>


                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <td>
                                                <input type="checkbox"
                                                       name="<?php echo e(strtolower($menu->name).'_'
                                                           .strtolower($role->name).'_'
                                                           .$role->id); ?>" />
                                            </td>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>



                        <div class = "col-md-12 text-right">
                            <a href="adminv2/">
                                <button class="btn btn-danger btn-sm mt-10" data-dismiss="modal">
                                    <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                </button>
                            </a>
                            <button type="submit" class="btn btn-success btn-sm mt-10 full_loader_show">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            </form>

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


















