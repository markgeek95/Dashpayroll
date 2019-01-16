<!-- Modal Add to list -->
  <div id="holiday_new_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="modal-content">

        <div class="modal-header addColor">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="col-xs-offset-1">
              <center>
                <h4 class="modal-title titleAddColor">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> New
                </h4>
              </center>
          </div>
        </div>

        <div class="modal-body">
          <div class="row formContainer"> 

            <div class="col-md-12">
              <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <form v-on:submit.prevent="holiday_new_submit($event)">

            <div class="col-xs-12 col-md-offset-1">
              <div class="radio form-group col-xs-12">
                <div class="col-xs-6" v-for="holiday in holiday_types_array">
                  <label class="lbl">
                    <input type="radio" name="holiday_type_id" v-bind:value="holiday.id">{{ holiday.name }} Holiday
                  </label>
                </div>
              </div>

              <div class="form-group col-xs-10">
                <div class="col-xs-12">
                  <label>Code:</label>
                  <input type="text" class="form-control" name="code" 
                  placeholder="Input code here.." />
                </div>
              </div>

              <div class="form-group col-xs-10">
                <div class="col-xs-12">
                  <label>Description:</label>
                  <input type="text" class="form-control" name="description" 
                  placeholder="Input description here.." />
                </div>
              </div>
              <div class="form-group col-xs-10">
                <div class="col-xs-12">
                  <label>Date:</label>
                  <input type="Date" class="form-control" name="date" />
                </div>
              </div>
            </div>
            <div class="form-group col-xs-12 mt-20 mb-50">
              <div class="col-xs-12 text-center">
                <button class="btn btn-success addBtn btn-sm" type="submit">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  New
                </button>
              </div>
            </div>

            </form>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
            <i class="fa fa-times-circle" aria-hidden="true"></i> Close
          </button>
        </div>

      </div>
    </div>
  </div>