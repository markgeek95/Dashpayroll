<div class="modal fade" id="leave_new_modal" role="dialog">
    <div class="modal-dialog">

        @include('messages.loader_notification')

        <div class="modal-content ">
            <div class="modal-header addColor">
                <a class="btn-closing pull-right" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="modal-title mdl-title text-center">
                    <strong class="font-title">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> New Leave
                    </strong>
                </div>
            </div>
            <div class="modal-body">
                <div class = "container-fluid ">
                    <div class="row">

                        @include('messages.vue_errors')

                        <form v-on:submit.prevent="leave_new_submit($event)">

                            {{ csrf_field() }}

                        <div class = "form-group-sm">
                            <div class = "col-sm-12 form-group clearfix">
                                <label class="control-label col-sm-12 pull-left">Code:
                                </label>
                                <div class = "col-sm-12">
                                    <input type="text" class="form-control" name="code"  autocomplete="off" />
                                </div>
                            </div>

                            <div class = "col-sm-12 form-group clearfix">
                                <label class="control-label col-sm-12 pull-left">Name:
                                </label>
                                <div class = "col-sm-12">
                                    <input type="text" class="form-control" name="name" autocomplete="off"/>
                                </div>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12">
                                <label class="control-label col-xs-12 pull-left"> Allocated:
                                </label>
                                <div class = "col-xs-12">
                                    <input type="text" class="form-control" name="allocated" autocomplete="off" />
                                </div>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12">
                                <label class="control-label col-xs-12 pull-left">
                                    Months:
                                </label>
                                <div class = "col-xs-12">
                                    <input type="text" class="form-control" name="months" autocomplete="off" />
                                </div>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12 hidden-xs">
                                <label class="control-label col-xs-12 pull-left">
                                    <input type="checkbox" name="cash_convertible"> Cash Convertible
                                </label>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12 hidden-xs">
                                <label class="control-label col-xs-12 pull-left">
                                    <input type="checkbox" name="carry_over"> Carry Over
                                </label>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12">
                                <label class="control-label col-xs-12 pull-left"> Max Hours to Convert/Carry Over:
                                </label>
                                <div class = "col-xs-12">
                                    <input type="text" class="form-control" name="max_hours_to_convert" autocomplete="off" />
                                </div>
                            </div>

                            <div class = "form-group center-block clearfix col-sm-12">
                                <label class="control-label col-xs-12 pull-left"> Convertible Non-Taxable Hours:
                                </label>
                                <div class = "col-xs-12">
                                    <input type="text" class="form-control" name="convertible_non_taxable_hours" autocomplete="off" />
                                </div>
                            </div>

                        </div>

                        <div class = "form-group text-right clearfix col-sm-12 form-button hidden-xs mt-5">
                            <div class ="col-sm-12 btn-container-xs">
                                <button type="button" class="btn btn-danger btn-sm btn-modal" data-dismiss="modal">
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