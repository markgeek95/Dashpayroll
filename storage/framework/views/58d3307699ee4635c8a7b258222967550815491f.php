<div class="modal fade" id="leave_edit_modal" role="dialog">
    <div class="modal-dialog">

        <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="modal-content ">
            <div class="modal-header addColor">
                <a class="btn-closing pull-right" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="modal-title mdl-title text-center">
                    <strong class="font-title">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Update Leave
                    </strong>
                </div>
            </div>
            <div class="modal-body">
                <div class = "container-fluid ">
                    <div class="row">

                        <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <form v-on:submit.prevent="leave_edit_submit($event)">

                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>


                            <div class = "form-group-sm">
                                <div class = "col-sm-12 form-group clearfix">
                                    <label class="control-label col-sm-12 pull-left">Code:
                                    </label>
                                    <div class = "col-sm-12">
                                        <input type="text" class="form-control" name="code" autocomplete="off"
                                        v-bind:value="leave_array.code"/>
                                    </div>
                                </div>

                                <div class = "col-sm-12 form-group clearfix">
                                    <label class="control-label col-sm-12 pull-left">Name:
                                    </label>
                                    <div class = "col-sm-12">
                                        <input type="text" class="form-control" name="name" autocomplete="off"
                                               v-bind:value="leave_array.name"/>
                                    </div>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12">
                                    <label class="control-label col-xs-12 pull-left"> Allocated:
                                    </label>
                                    <div class = "col-xs-12">
                                        <input type="text" class="form-control" name="allocated" autocomplete="off"
                                               v-bind:value="leave_array.allocated"/>
                                    </div>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12">
                                    <label class="control-label col-xs-12 pull-left">
                                        Months:
                                    </label>
                                    <div class = "col-xs-12">
                                        <input type="text" class="form-control" name="months" autocomplete="off"
                                               v-bind:value="leave_array.months"/>
                                    </div>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12 hidden-xs">
                                    <label class="control-label col-xs-12 pull-left">
                                        <input type="checkbox" name="cash_convertible" value="cash_convertible"
                                        v-bind:checked="cash_convertible_check(leave_array.cash_convertible)"> Cash Convertible
                                    </label>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12 hidden-xs">
                                    <label class="control-label col-xs-12 pull-left">
                                        <input type="checkbox" name="carry_over" value="carry_over"
                                               v-bind:checked="carry_over_check(leave_array.carry_over)"> Carry Over
                                    </label>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12">
                                    <label class="control-label col-xs-12 pull-left"> Max Hours to Convert/Carry Over:
                                    </label>
                                    <div class = "col-xs-12">
                                        <input type="text" class="form-control" name="max_hours_to_convert" autocomplete="off"
                                               v-bind:value="leave_array.max_hours_to_convert"/>
                                    </div>
                                </div>

                                <div class = "form-group center-block clearfix col-sm-12">
                                    <label class="control-label col-xs-12 pull-left"> Convertible Non-Taxable Hours:
                                    </label>
                                    <div class = "col-xs-12">
                                        <input type="text" class="form-control" name="convertible_non_taxable_hours" autocomplete="off"
                                               v-bind:value="leave_array.convertible_non_taxable_hours"/>
                                    </div>
                                </div>

                            </div>

                            <div class = "form-group text-right clearfix col-sm-12 form-button hidden-xs mt-5">
                                <div class ="col-sm-12 btn-container-xs">
                                    <button class="btn btn-danger btn-sm btn-modal" data-dismiss="modal">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Close
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