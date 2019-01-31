<!-- Modal Add to list -->
<div id="rest_day_new_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        @include('messages.loader_notification')

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
                        @include('messages.vue_errors')
                    </div>

                    <form v-on:submit.prevent="rest_day_new_submit($event)">

                        <div class="col-xs-12 col-md-offset-1">
                            <div class="radio form-group col-xs-12">
                                <div class="col-xs-6" v-for="shift in shifts_array">
                                    <label class="lbl">
                                        <input type="radio" name="shift_id" v-bind:value="shift.id">@{{ shift.name }}
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
                                    <i class="fa fa-save" aria-hidden="true"></i>
                                    Save
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