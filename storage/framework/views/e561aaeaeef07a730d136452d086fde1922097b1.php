<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Philhealth Maintenance
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

      <?php echo $__env->make('maintenance.goverment_tables.philhealth_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('maintenance.goverment_tables.philhealth_modal_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="tab">
            <?php echo $__env->make('maintenance.goverment_tables.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="container-fluid mt-40 mr-20">
            <div class = "row">
            <div class="col-xs-11 mb-20 ml-35 paneltable">
                    <div class="alert alert-primary">
                      <strong>PhilHealth Table</strong>
                    </div>
                <div id="tableSort" class="table-responsive panelcontent">  
                    <div class="col-xs-6 button-groups" style="z-index: 100">  
                        <button type="button" class="btn btn-success btn-sm"
                        v-on:click="philhealth_maintenance">
                            <i class="fa fa-plus"></i> New
                        </button>
                        <span class="btn btn-info btn-file btn-sm">
                            <i class="glyphicon glyphicon-cloud-upload"></i> 
                            Import <input type="file" multiple>
                        </span>
                    </div>

                          <table class="table table-bordered" id="dadasTable" >
                            <thead>
                              <tr>
                                <th>Range</th>
                                <th class="text-right">Amount</th>
                                <th class="text-right">Rate</th>
                                <th>Employee</th>
                                <th>Employer</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                              <tbody>
                                <?php if(!$datas->isEmpty()): ?>
                                  <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                        <td><?php echo e($data->ranges); ?></td>
                                        <td class="text-right"><?php echo e($data->amount); ?></td>
                                        <td class="text-right"><?php echo e($data->rate); ?></td>
                                        <td>
                                          <strong class="text-blue text-uppercase">
                                            <?php echo e($data->last_name.', '.$data->first_name.' '.
                                          $data->name.' '.$data->middle_name); ?>

                                          </strong>
                                        </td>
                                        <td>  
                                          <strong class="text-blue text-uppercase">
                                            <?php echo e($data->employer); ?>

                                          </strong>
                                        </td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm"
                                          v-on:click="philhealth_maintenance_edit($event, <?php echo e($data->phil_id); ?>)">
                                              <i class="fa fa-pencil-square-o"></i>
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm"
                                          v-on:click="philhealth_maintenance_delete(<?php echo e($data->phil_id); ?>)">
                                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                                          </button>
                                        </td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                              </tbody>    
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
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















