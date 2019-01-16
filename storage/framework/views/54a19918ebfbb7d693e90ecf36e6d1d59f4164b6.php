<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Edit New Payroll User
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

            <form class="form-horizontal addMemberForm" method="POST" action="<?php echo e(url('new_payroll_user/'.$user->id)); ?>">

                <?php echo e(csrf_field('patch')); ?>

                <?php echo e(method_field('PATCH')); ?>



                <input type="hidden" name="id" value="<?php echo e($user->id); ?>" />

                <div class="col-md-12 mt-20" id="companyform">
                    <div class="row" style="border-right: 2px solid #0265FE;border-left: 2px solid #0265FE;padding:50px;padding-top: 20px;">
                        <h2 class="text-info"> <i class="fa fa-plus"></i>Edit New Payroll User</h2>

                        <div class="tab-pane fade in active mt-40">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-4  text-info" id="textAlign">
                                        Code<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="code" id="code" class="form-control"
                                               placeholder="Code" value="<?php echo e($user->code); ?>">
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
                                                        <?php if($user->user_level_id == $user_level->id): ?> selected <?php endif; ?>>
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
                                               placeholder="Enter Username" value="<?php echo e($user->username); ?>" />
                                        <?php if($errors->has('username')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('username')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="form-group <?php if($errors->has('old_password')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Old Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="old_password" class="form-control"
                                                   placeholder="Enter Old Password" />
                                            <span class="input-group-addon" style="border-radius: 0"
                                                  v-on:click="password_toggle">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        <?php if($errors->has('old_password')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('old_password')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group <?php if($errors->has('password')): ?> has-error <?php endif; ?>">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        New Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="password" class="form-control"
                                                   placeholder="Enter New Password" />
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
                                               placeholder="Enter Last Name" value="<?php echo e($username->last_name); ?>">
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
                                               placeholder="Enter First Name" value="<?php echo e($username->first_name); ?>">
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
                                               placeholder="Enter Middle Name" value="<?php echo e($username->middle_name); ?>">
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
                                                        <?php if($username->suffix == $suffix->id): ?> selected <?php endif; ?>>
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

                                            <?php
                                                // query for user roles
                                                $menu_role = App\MenuRoleUser::menu_role_user($user->id, $menu->id);
                                                $role_array = [];
                                                if ($menu_role){
                                                    $role_array = explode(',',$menu_role->role_id);
                                                }
                                            ?>

                                            <?php if($menu_role): ?>
                                                <input type="hidden" name="<?php echo e(strtolower($menu->name)); ?>"
                                                       value="<?php echo e($menu_role->role_id); ?>">
                                            <?php endif; ?>

                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php
                                                    // for selected roles
                                                    $selected = (in_array($role->id, $role_array) && $menu_role)? true : false;
                                                    // if role is disabled
                                                    $disabled = ($menu_role && in_array(2, $role_array) && $role->id != 2)? true : false;
                                                ?>

                                                <td>
                                                    <input type="checkbox"
                                                           name="<?php echo e(strtolower($menu->name).'_'
                                                           .strtolower($role->name).'_'
                                                           .$role->id); ?>"
                                                           <?php if($selected): ?> checked <?php endif; ?>
                                                           <?php if($disabled): ?> disabled <?php endif; ?> />
                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>



                            <div class = "col-md-12 text-right">
                                <a href="adminv2/">
                                    <a href="" class="btn btn-danger btn-sm mt-10" >
                                        <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                    </a>
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



















