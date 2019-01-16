<!--  Modal -->
<div class="modal fade" id="edit_philheatlh_modal" role="dialog">

  <div class="modal-dialog modal-open">

  <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div class="modal-content">
      <div class="modal-header addColor">
        <div class="modal-title text-center">
          <strong class="font-title"> 
            <i class="fa fa-line-chart" aria-hidden="true"></i> Edit PhilHealth 
          </strong>
          <a class="btn-closing pull-right" data-dismiss="modal">
            <i class="fa fa-times" aria-hidden="true"></i>
          </a>
        </div>  
      </div>
      <div class="modal-body">
        <div class="container-fluid ">
          <div class="row">

            <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <form v-on:submit.prevent="philhealth_maintenance_edit_submit($event)">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PATCH')); ?>

            <!-- <input type="hidden" name="id" v-bind:value="philhealth_id"> -->
           <div class="form-group-sm">
            <div class = "form-group center-block clearfix col-md-12 mt-20">
              <label class="control-label col-xs-4 pull-left">Range:</label>
              <div class = "col-xs-12 clearfix">
                <input type="text" class="form-control" name="range" autocomplete="off"
                v-bind:value="range_value" />
              </div>
            </div>
            <div class="form-group center-block clearfix col-md-12 ">
              <label class="control-label col-xs-4 pull-left">Amount:</label>
              <div class="col-xs-12 clearfix">
                <input type="number" class="form-control" name="amount" autocomplete="off" 
                v-bind:value="amount_value"/>
              </div>
            </div>
            <div class = "form-group center-block clearfix col-md-12 ">
              <label class="control-label col-xs-4 pull-left">Rate:</label>
              <div class = "col-xs-12 clearfix">
                <input type="number" class="form-control" name="rate" autocomplete="off"
                v-bind:value="rate_value" />
              </div>
            </div>
            <div class = "form-group center-block clearfix col-md-12 col-md-offset-1">
              <label class="control-label col-xs-4 pull-left">Employee:</label>
              <div class = "col-xs-12 clearfix">
                <select name="employee" class="form-control btn-flat" style="width: 100%">
                    <option value="">--Select--</option>
                    <option v-bind:value="employee.employee_id" v-for="employee in employee_list"
                    v-bind:selected="check_employee_id(employee.employee_id)">
                      {{ employee.last_name | textuppercase }}, {{ employee.first_name | textuppercase }} 
                      {{ employee.name | textuppercase }} {{ employee.middle_name | textuppercase }}
                    </option>
                </select>
              </div>
            </div>
            <div class="form-group center-block clearfix col-md-12 col-md-offset-1">
              <label class="control-label col-xs-4 pull-left">Employer:</label>
              <div class = "col-xs-12 clearfix">
                <input type="text" class="form-control" name="employer" autocomplete="off"
                v-bind:value="employer_value" />
              </div>
            </div>
            <div class="col-xs-offset-8 col-xs-4 button-groups mt-10">  
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                  <i class="fa fa-trash"></i> Close
                </button>
                <button type="submit" class="btn btn-success btn-sm">
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