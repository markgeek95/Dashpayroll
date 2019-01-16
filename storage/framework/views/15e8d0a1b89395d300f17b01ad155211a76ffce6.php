<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Annual Tax
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

      <?php echo $__env->make('maintenance.tax_tables.annual_tax_new', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('maintenance.tax_tables.annual_tax_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="tab">
            <?php echo $__env->make('maintenance.tax_tables.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>





        <div class="container-fluid ml-17 mr-10 mt-40">
          <div class = "row">
            <div class="col-sm-12 mb-20 paneltable">
              <div class="alert alert-primary">
                <strong>Tax Table</strong>
              </div>
              <div class="table-responsive">


                <div class = "col-xs-6 button-groups">  
                  <button class="btn btn-success btn-sm" v-on:click="annual_tax_new">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> 
                    <strong> New </strong>
                  </button>
                </div>

                

                <table class="table table-bordered mt-50" id="AnnualTable">
                  <thead>
                    <tr class="thead-primary">
                      <th>Range</th>
                      <th>Fixed Rate</th>
                      <th>Tax Rate</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!$data->isEmpty()): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="text-right"><?php echo e($row->ranges); ?></td>
                      <td class="text-right"><?php echo e(number_format($row->fixed_rate, 2)); ?></td>
                      <td class="text-right"><?php echo e(number_format($row->tax_rate, 2)); ?></td>
                      <td class="text-center">
                        <button class="btn btn-update btn-sm" v-on:click="annual_tax_edit(<?php echo e($row->id); ?>)">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </button>&nbsp;
                        <button class="btn btn-danger btn-sm"
                        v-on:click="global_delete(<?php echo e($row->id); ?>, 'annual_tax_delete')">
                          <i class="fa fa-trash-o" aria-hidden="true"></i> 
                        </button>
                      </td> 
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                      <td colspan="4">
                        <strong class="text-danger">No data available on table.</strong>
                      </td>
                    </tr>
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
<script>
  $('#withholding_tax').modal();
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















