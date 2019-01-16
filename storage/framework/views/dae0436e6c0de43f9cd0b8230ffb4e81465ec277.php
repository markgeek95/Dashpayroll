<!--  Modal add-->
<div class="modal fade" id="sss_add_modal" role="dialog">
  <div class="modal-dialog modal-open">

    <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="modal-content">
      <div class="modal-header addColor">
        <div class="modal-title text-center">
          <strong class="font-title"> 
            <i class="fa fa-line-chart" aria-hidden="true"></i> Add SSS 
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

            <form v-on:submit.prevent="sss_submit_form($event)">

              <?php echo e(csrf_field()); ?>


            <div class="form-group-sm">
              <div class = "form-group center-block clearfix col-md-12 mt-20">
                <label class="control-label col-xs-4 pull-left">Range:</label>
                <div class="col-xs-12 clearfix">
                  <input type="text" class="form-control" name="range" autocomplete="off" />
                </div>
              </div>

              <div class="form-group center-block clearfix col-md-12 col-md-offset-1">
              <label class="control-label col-xs-4 pull-left">Employee:</label>
              <div class = "col-xs-12 clearfix">
                <select name="employee" class="form-control btn-flat select2" style="width: 100%">
                    <option value="">--Select--</option>
                    <option v-bind:value="employee.employee_id" v-for="employee in employee_list">
                      {{ employee.last_name | textuppercase }}, {{ employee.first_name | textuppercase }} 
                      {{ employee.name | textuppercase }} {{ employee.middle_name | textuppercase }}
                    </option>
                </select>
              </div>
            </div>



              <div class="form-group center-block clearfix col-md-12 col-md-offset-1">
                <label class="control-label col-xs-4 pull-left">Employer:</label>
                <div class = "col-xs-12 clearfix">
                  <input type="text" class="form-control" name="employer" autocomplete="off" />
                </div>
              </div>
              <div class = "form-group center-block clearfix col-md-12 col-md-offset-1">
                <label class="control-label col-xs-4 pull-left">Ec:</label>
                <div class = "col-xs-12 clearfix">
                  <input type="text" class="form-control" name="ec" autocomplete="off" />
                </div>
              </div>
            </div>
          <div class="col-xs-offset-8 col-xs-4 button-groups mt-10">  
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                <i class="fa fa-trash"></i> Close
              </button>
              <button type="submit" class="btn btn-success btn-sm ">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
              </button>
          </div>

          </form>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>