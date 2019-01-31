<div id="employee_status_new_modal" class="modal fade " role="dialog">
    <div class="modal-dialog modal-sm">

        @include('messages.loader_notification')

        <div class="modal-content">

            <div class="modal-header addColor">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-xs-12">
                    <h4 class="modal-title titleAddColor">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        New Employee Status
                    </h4>
                </div>
            </div>

            <div class="modal-body">

                @include('messages.vue_errors')

                <form v-on:submit.prevent="employee_status_new_submit($event)">
                    {{ csrf_field() }}
                <div class="row formContainer">
                    <div class="col-xs-12">
                        <div class="form-group col-xs-12">
                            <div class="col-xs-12">
                                <label class="lbl">
                                    New Status: <input type="text" name="description" class="form-control txtBox" required>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group col-xs-12">
                            <div class="col-xs-12 adjustTextbox">
                                <label class="lbl">
                                    <input type="radio" name="status" value="1" required>
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group col-xs-12">
                            <div class="col-xs-12 adjustTextbox">
                                <label class="lbl">
                                    <input type="radio" name="status" value="0" required>
                                    In-Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 mt-20 mb-50">
                        <div class="col-xs-12 text-center">
                            <button class="btn btn-success addBtn" type="submit">
                                <i class="fa fa-save" aria-hidden="true"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
            </div>
        </div>
    </div>
</div>