<!-- Modal Add to list -->
<div id="overtime_nightdifferential_edit_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        @include('messages.loader_notification')


        <div class="modal-content">
            <div class="modal-header addColor">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> New
                </h4>
            </div>
            <div class="modal-body" >

                @include('messages.vue_errors')


                <form v-on:submit.prevent="overtime_nightdifferential_edit_submit($event)">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row formContainer">
                        <div class="col-xs-11 col-xs-offset-1">
                            <div class="radio form-group col-xs-10">
                                <div class="col-xs-12">
                                    Code: <input type="text" class="form-control" name="code"
                                                 placeholder="Enter Code"
                                    v-bind:value="ot_nightdifferential.code"/>
                                </div>
                            </div>
                            <div class="form-group col-xs-10">
                                <div class="col-xs-12">
                                    Description:<input type="text" class="form-control" name="description"
                                                       placeholder="Enter Description..."
                                                       v-bind:value="ot_nightdifferential.description"/>
                                </div>
                            </div>
                            <div class="form-group col-xs-10">
                                <div class="col-xs-12">
                                    OT Rate: <input type="text" class="form-control" name="ot"
                                                    placeholder="Enter OT Rate"
                                                    v-bind:value="ot_nightdifferential.ot">
                                </div>
                            </div>
                            <div class="form-group col-xs-10">
                                <div class="col-xs-12">
                                    ND Rate: <input type="text" class="form-control" name="nd"
                                                    placeholder="Enter Night Differential Rate"
                                                    v-bind:value="ot_nightdifferential.nd"/>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-xs-12 mt-20 mb-50">
                            <div class="col-xs-12 text-center">
                                <button class="btn btn-success btn-sm addBtn" type="submit">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i> New
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                    <i class="fa fa-times-circle" aria-hidden="true"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>