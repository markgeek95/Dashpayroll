<div class="modal fade" role="dialog" id="banks_edit_modal">
    <div class="modal-dialog">

        <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="modal-content">
            <div class="modal-header modal-bgcolor">
                <a class="btn-closing pull-right" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="modal-title mdl-title text-center">
                    <strong class="font-title">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Update Bank
                    </strong>
                </div>
            </div>
            <div class="modal-body">
                <div class="container-fluid ">

                    <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <form v-on:submit.prevent="bank_edit_submit($event)">


                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PATCH')); ?>


                    <div class="row">
                        <div class = "col-md-12">
                            <label class="control-label col-md-12 pull-left">Bank Name:
                            </label>
                            <div class = "col-md-12">
                                <input type="text" class="form-control" name="bank_name" autocomplete="off"
                                v-bind:value="bank.bank_name"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12 mt-5">
                            <label class="control-label col-xs-12 pull-left">Account:
                            </label>
                            <div class = "col-xs-12 clearfix">
                                <input type="text" class="form-control" name="account" autocomplete="off"
                                       v-bind:value="bank.account" />
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12 mt-5">
                            <label class="control-label col-xs-12 pull-left">RDO:
                            </label>
                            <div class = "col-xs-12 clearfix">
                                <input type="text" class="form-control" name="rdo" autocomplete="off"
                                v-bind:value="bank.rdo" />
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12 mt-5">
                            <label class="control-label col-xs-12 pull-left">Address:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="address" autocomplete="off"
                                v-bind:value="bank.address"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Servicing Branch Code:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="servicing_branch_code" autocomplete="off"
                                v-bind:value="bank.servicing_branch_code"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Payroll Branch Code:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="payroll_branch_code" autocomplete="off"
                                v-bind:value="bank.payroll_branch_code"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Bank Code:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="bank_code" autocomplete="off"
                                v-bind:value="bank.bank_code"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Company Code:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="company_code" autocomplete="off"
                                v-bind:value="bank.company_code"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Batch No:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="batch_no" autocomplete="off"
                                v-bind:value="bank.batch_no"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Presenting Office:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="presenting_office" autocomplete="off"
                                v-bind:value="bank.presenting_office"/>
                            </div>
                        </div>
                        <div class = "form-group center-block clearfix col-md-12">
                            <label class="control-label col-xs-12 pull-left"> Presenting Office:
                            </label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="ceiling_amount" autocomplete="off"
                                       v-bind:value="bank.ceiling_amount"/>
                            </div>
                        </div>
                        <div class = "form-group text-right clearfix col-md-12 form-button hidden-xs mt-5">
                            <div class ="col-md-12 btn-container-xs">
                                <button type="button" class="btn btn-danger btn-sm btn-modal" data-dismiss="modal">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Close
                                </button>
                                <button type="submit" class="btn btn-success btn-sm btn-modal">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>