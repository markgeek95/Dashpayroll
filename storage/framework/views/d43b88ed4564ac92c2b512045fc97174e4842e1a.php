<div class="modal fade" id="annualtax_edit" role="dialog">
  <div class="modal-dialog modal-open">

    <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <div class="modal-content">
      <div class="modal-header modal-bgcolor">
        <a class="btn-closing pull-right" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
        <div class="modal-title mdl-title text-center">
          <strong class="font-title"> 
            <i class="fa fa-line-chart" aria-hidden="true"></i> Update Tax 
          </strong>
        </div>  
      </div>
      

      <div class="modal-body">
        <div class = "container-fluid ">
          <div class="row">

            <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <form v-on:submit.prevent="annualtax_edit_submit($event)">

              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PATCH')); ?>


              <input type="hidden" name="id" v-bind:value="annual_tax_id">

            <div class="form-group-sm"> 

              <div class = "form-group center-block clearfix col-sm-12 mt-5">
                <label class="control-label col-sm-12 pull-left">
                  Range:
                </label>
                <div class="col-sm-12 clearfix">
                  <input type="text" class="form-control" name="range" autocomplete="off"
                  v-bind:value="range_value" />
                </div>
              </div>

              <div class="form-group center-block clearfix col-sm-12 ">
                <label class="control-label col-sm-12 pull-left">
                  Fixed Rate:
                </label>
                <div class="col-sm-12 clearfix">
                  <input type="text" class="form-control" name="fixed_rate" autocomplete="off"
                  v-bind:value="fixed_rate_value" />
                </div>
              </div>

              <div class="form-group center-block clearfix col-sm-12 col-sm-offset-1">
                <label class="control-label col-sm-12 pull-left"> Tax Rate:
                </label>
                <div class = "col-sm-12 clearfix">
                  <input type="text" class="form-control" name="tax_rate" autocomplete="off"
                  v-bind:value="tax_rate_value" />
                </div>
              </div>

            </div> 

            <div class="form-group text-right clearfix col-sm-12 form-button hidden-xs mt-5">   
              <div class ="col-sm-12 btn-container-xs"> 
                <button class="btn btn-danger btn-sm btn-modal" data-dismiss="modal">
                  <i class="fa fa-times" aria-hidden="true"></i> Close
                </button>
                <button type="submit" class="btn btn-success btn-sm btn-modal">
                  <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                </button>
              </div>
            </div>

            </form>

          </div>  
        </div>
      </div>

    </div>
  </div>
</div>