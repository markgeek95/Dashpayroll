<div class="modal fade" id="department_modal" role="dialog">
    <div class="modal-dialog">

        <?php echo $__env->make('messages.loader_notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="modal-content">
            <div class="modal-header">
                <a class="btn-closing pull-right" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="modal-title mdl-title text-center">
                    <strong class="font-title">
                        <i class="fa fa-building-o" aria-hidden="true"></i> Department
                    </strong>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group-sm">
                    <div class = "container-fluid text-left mt-20">

                        <?php echo $__env->make('messages.vue_errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <form v-on:submit.prevent="department_new_submit($event)">
                            <?php echo e(csrf_field()); ?>

                        <div class = "col-md-12">
                            <label class="control-label col-xs-12">Name:</label>
                            <div class = "col-xs-12">
                                <input type="text" class="form-control" name="name" autocomplete="off"/>
                            </div>
                        </div>
                        <div class = "form-group text-right clearfix col-md-12 form-button hidden-xs mt-20">
                            <div class ="col-md-12 btn-container-xs">
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