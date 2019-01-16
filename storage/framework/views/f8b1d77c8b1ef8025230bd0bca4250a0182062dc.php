<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Withholding Tax
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

      <?php echo $__env->make('maintenance.tax_tables.withholding_tax_new', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('maintenance.tax_tables.withholding_tax_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('maintenance.tax_tables.withholding_tax_delete', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="tab">
            <?php echo $__env->make('maintenance.tax_tables.tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="container-fluid ml-17 mr-10 mt-40">
          <div class="row">
            <div class="col-sm-12 mb-20 paneltable">
              <div class="alert alert-primary">
                <strong>Tax Table</strong>
              </div>
              <div class="table-responsive">

                <div class="col-xs-6 button-groups">  
                  <button class="btn btn-success btn-sm"
                  v-on:click="withholding_tax_new">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> 
                    <strong> New </strong> 
                  </button>
                </div>
                
                <table class="table table-bordered mt-50" id="TaxTables">
                  <thead>
                    <tr class="thead-primary">
                      <th>Frequency</th>
                      <th>Range</th>
                      <th>Percentage</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!$data->isEmpty()): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($row->name); ?></td>
                      <td class="text-right"><?php echo e($row->ranges); ?></td>
                      <td class="text-right"><?php echo e($row->percentage); ?></td>  
                      <td class="text-right"><?php echo e(number_format($row->amount, 2)); ?></td>
                      <td class="text-center">
                        <button class="btn btn-primary btn-sm"
                        v-on:click.prevent="witholding_tax_edit($event, <?php echo e($row->tax_id); ?>)">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        </button>&nbsp;
                        <button class="btn btn-danger btn-sm"
                        v-on:click.prevent="witholding_tax_delete_modal(<?php echo e($row->tax_id); ?>)">
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





















