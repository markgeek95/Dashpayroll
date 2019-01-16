<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Employee Master File
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


<div class="container-fluid mt-40 mr-20">
    <div class="row">
      <div class="col-xs-12 mb-20 ml-35">

        <div class="alert alert-primary">
          <strong class="text-center">Employee Table</strong>
        </div>

        <div class="table-responsive panelcontent">
          <div class="col-xs-6 button-groups">  
            <a href="dashboard/employeefileNew/">
              <a href="<?php echo e(url('employee/create')); ?>" class ="btn btn-success btn-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> New
              </a>
            </a>
                <span class="btn btn-info btn-file btn-sm">
                    <i class="glyphicon glyphicon-cloud-upload"></i> 
                    Import <input type="file" multiple>
                </span>
          </div>

          <table class="table table-bordered" id="dadasTable">
            <thead>
              <tr class="active">
                <th>ID</th>
                <th>Name</th>
                <th>BirthDate</th>
                <th>Shift</th>
                <th>Position</th>
                <th>Department</th>
                <th>Address</th>
                <th>Zip Code</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Gender</th>
              </tr>
            </thead>
            <tbody>

                <?php if(!$employees->isEmpty()): ?>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($employee->id); ?></td>
                        <td>
                            <?php echo e($employee->last_name.', '.$employee->first_name.' '.
                            $employee->name.' '.$employee->middle_name); ?>

                        </td>
                        <td><?php echo e(Carbon::parse($employee->birthdate)->toFormattedDateString()); ?></td>
                        <td><?php echo e($employee->shift); ?></td>
                        <td><?php echo e($employee->position); ?></td>
                        <td><?php echo e($employee->department); ?></td>
                        <td><?php echo e($employee->address); ?></td>
                        <td><?php echo e($employee->zip_code); ?></td>
                        <td><?php echo e($employee->contact_no); ?></td>
                        <td><?php echo e($employee->email); ?></td>
                        <td><?php echo e(($employee->gender == 'M')? 'Male' : 'Female'); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php else: ?>

                <tr>
                    <td colspan="11" class="text-center">
                        <strong class="text-red">
                            Employee master file is empty
                        </strong>
                    </td>
                </tr>

              <?php endif; ?>


            </tbody>

            <tfoot>
                <tr>
                    <td colspan="11" class="text-center">
                        <?php echo e($employees->links()); ?>

                    </td>
                </tr>
            </tfoot>

          </table>

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





















