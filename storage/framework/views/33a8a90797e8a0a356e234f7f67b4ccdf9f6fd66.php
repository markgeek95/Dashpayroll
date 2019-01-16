<div class="modal fade" id="withholding_tax_edit" role="dialog">
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

				<div class="container-fluid">
					<div class="row">

					  <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

					  <form v-on:submit.prevent="witholding_tax_edit_submit($event)">

					    <?php echo e(csrf_field()); ?>

					    <?php echo e(method_field('PATCH')); ?>


					    <input type="hidden" name="id" v-bind:value="withholding_tax_id">

					  <div class="form-group-sm"> 

					    <div class="form-group center-block clearfix col-sm-12 mt-5">
					      <label class="control-label col-sm-12 pull-left">
					        Frequency:
					      </label>
					      <div class="col-sm-12">
					        <select name="frequency" class="form-control" style="width: 100%">
					          <option>--Select</option>
					          <option v-for="fr in frequency" v-bind:value="fr.id"
					          v-bind:selected="check_frequency_id(fr.id)">
					            {{ fr.name }}
					          </option>
					        </select>
					      </div>
					    </div>

					    <div class="form-group center-block clearfix col-sm-12 mt-5">
					      <label class="control-label col-xs-12 pull-left">
					        Range:
					      </label>
					      <div class = "col-xs-12 clearfix">
					        <input type="text" class="form-control" name="range" autocomplete="off"
					        v-bind:value="range_value" />
					      </div>
					    </div>

					    <div class="form-group center-block clearfix col-sm-12 mt-5">
					      <label class="control-label col-xs-12 pull-left"> Percentage:
					      </label>
					      <div class="col-xs-12">
					        <input type="text" class="form-control" name="percentage" autocomplete="off"
					        v-bind:value="percentage_value" />
					      </div>
					    </div>

					    <div class="form-group center-block clearfix col-sm-12">
					      <label class="control-label col-xs-11 pull-left"> Amount:</label>
					      <div class="col-xs-12">
					        <input type="text" class="form-control" name="amount" autocomplete="off"
					        v-bind:value="amount_value" />
					      </div>
					    </div>

					  </div>

					  <div class="form-group text-right clearfix col-sm-12 form-button hidden-xs mt-5">   
					    <div class ="col-sm-12 btn-container-xs text-right">
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