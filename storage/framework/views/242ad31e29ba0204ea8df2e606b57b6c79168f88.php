<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Employee File Information
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

        <div class="tab">
            <?php echo $__env->make('dashboard.dashboard_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <!-- Main Content Goes Here -->


        <div class="container-fluid ml-20 mr-20 mt-20">
            <div class="row">
                <div class="col-md-12 mt-20 mb-20 paneltable" id="companyform">
                    <div class="row" >  

                        <div class="col-md-12">   
                            <div class="alert alert-success">
                                <strong> 
                                    <i class="fa fa-user" aria-hidden="true"></i> 
                                    Add Employee 
                                </strong>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <form action="<?php echo e(url('employee')); ?>" class="form-horizontal" method="POST"
                                        id="employee_registration_form">

                                            <?php echo e(csrf_field()); ?>


                                            <div class="col-md-6">
                                                <div class="form-group <?php if($errors->has('id')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        ID <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="id" class="form-control" 
                                                        placeholder="Enter ID" value="<?php echo e(old('id')); ?>" />
                                                        <?php if($errors->has('id')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('id')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('last_name')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Last Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="last_name" class="form-control" 
                                                        placeholder="Enter Last Name" value="<?php echo e(old('last_name')); ?>" />
                                                        <?php if($errors->has('last_name')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('last_name')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('first_name')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        First Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="first_name"  class="form-control" 
                                                        placeholder="Enter First Name" value="<?php echo e(old('first_name')); ?>" />
                                                        <?php if($errors->has('first_name')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('first_name')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('middle_name')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        Middle Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="middle_name" class="form-control"
                                                        placeholder="Enter Middle Name" value="<?php echo e(old('middle_name')); ?>" />
                                                        <?php if($errors->has('middle_name')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('middle_name')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('suffix')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4  text-info">
                                                        Suffix <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="suffix" class="form-control">
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

                                                <div class="form-group <?php if($errors->has('birthdate')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Birthdate <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="date" name="birthdate"  class="form-control"
                                                        placeholder="Enter Birthdate" value="<?php echo e(old('birthdate')); ?>" />
                                                        <?php if($errors->has('birthdate')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('birthdate')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('gender')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Gender <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="gender">
                                                            <option value="">--Select--</option>
                                                            <option value="M"
                                                            <?php if(old('gender') == 'M'): ?> selected <?php endif; ?>>
                                                            Male</option>
                                                            <option value="F" 
                                                            <?php if(old('gender') == 'F'): ?> selected <?php endif; ?>>
                                                            Female</option>
                                                        </select>
                                                        <?php if($errors->has('gender')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('gender')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                            <div class="col-md-6">


                                                <div class="form-group <?php if($errors->has('shift')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Shift <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="shift" class="form-control">
                                                            <option value="">--Select--</option>
                                                            <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($shift->id); ?>"
                                                                <?php if(old('shift') == $shift->id): ?> selected <?php endif; ?>>
                                                                    <?php echo e($shift->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('shift')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('shift')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('position')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Position <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="position" class="form-control">
                                                            <option value="">--Select--</option>
                                                            <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($position->id); ?>"
                                                                <?php if(old('position') == $position->id): ?> selected <?php endif; ?>>
                                                                    <?php echo e($position->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('position')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('position')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('department')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4  text-info">
                                                        Department <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="department" class="form-control">
                                                            <option value="">--Select--</option>
                                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($department->id); ?>"
                                                                <?php if(old('department') == $department->id): ?> selected <?php endif; ?>>
                                                                    <?php echo e($department->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('department')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('department')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>



                                                <div class="form-group <?php if($errors->has('address')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4  text-info">
                                                        Address <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="address"
                                                        placeholder="Enter Address"><?php echo e(old('address')); ?></textarea>
                                                        <?php if($errors->has('address')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('address')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('zip_code')): ?> has-error <?php endif; ?>">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        Zip Code <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="zip_code" class="form-control" 
                                                        placeholder="Enter Zip Code" value="<?php echo e(old('zip_code')); ?>">
                                                        <?php if($errors->has('zip_code')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('zip_code')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group <?php if($errors->has('contact_no')): ?> has-error <?php endif; ?>">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Contact No. <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="number" name="contact_no"  class="form-control" 
                                                        placeholder="Contact no.." value="<?php echo e(old('contact_no')); ?>" />
                                                        <?php if($errors->has('contact_no')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('contact_no')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>


                                                <div class="form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
                                                    <labeL class="control-label col-sm-4 text-info">
                                                        Email <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="email" class="form-control" 
                                                        placeholder="Enter Email Adress" value="<?php echo e(old('email')); ?>">
                                                        <?php if($errors->has('email')): ?>
                                                            <span class="help-block">
                                                                <?php echo e($errors->first('email')); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                

                                            <div class="clearfix"></div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="form-horizontal mt-10 center-block clearfix col-md-12">
                            <div class = "col-md-12 text-right">    
                                <a href="dashboard/EmployeeFile">
                                    <a href="" class="btn btn-danger btn-sm mt-10">
                                        <i class="fa fa-times"></i> Cancel
                                    </a> 
                                </a>
                                <button type="submit" class="btn btn-lg btn-success btn-sm mt-10 full_loader_show" 
                                form="employee_registration_form">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                                </button>
                            </div>
                        </div>  

                    </div>
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

    <script>
        $(document).on('change', '.company_image', function(event){
            var fileUpload = event.target.files;
            $('.fileShowingImage').val(fileUpload[0].name);
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















