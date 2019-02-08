<div class="modal fade" id="statutorydeduction_edit" role="dialog">
    <div class="modal-dialog modal-open">


        @include('messages.loader_notification')


        <div class="modal-content">
            <div class="modal-header addColor">
                <a class="btn-closing pull-right" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="modal-title mdl-title text-center">
                    <strong class="font-title">
                        <i class="fa fa-line-chart" aria-hidden="true"></i> Edit Statutory
                    </strong>
                </div>
            </div>
            <div class="modal-body">
                <div class = "container-fluid ">
                    <div class="row">


                        @include('messages.vue_errors')

                        <form v-on:submit.prevent="statutory_edit_submit">

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group-sm">
                                <div class = "col-sm-12">
                                    <label class="control-label col-sm-12 pull-left">Frequency:
                                    </label>
                                    <div class = "col-sm-12">
                                        <select name="frequency" class="form-control">
                                            <option value="">--Select</option>
                                            <option v-for="fr in frequency" v-bind:value="fr.id"
                                                    v-bind:selected="frequency_select(fr.id)">
                                                @{{ fr.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "form-group center-block clearfix col-sm-12 mt-5">
                                    <label class="control-label col-sm-12 pull-left">Code:
                                    </label>
                                    <div class = "col-sm-12 clearfix">
                                        <input type="text" class="form-control" name="code" autocomplete="off"
                                        v-bind:value="statutory_array.code"/>
                                    </div>
                                </div>
                                <div class = "form-group center-block clearfix col-sm-12 mt-5">
                                    <label class="control-label col-sm-12 pull-left">Deduction Name:
                                    </label>
                                    <div class = "col-sm-12 clearfix">
                                        <input type="text" class="form-control" name="deduction_name" autocomplete="off"
                                               v-bind:value="statutory_array.deduction_name"/>
                                    </div>
                                </div>
                                <div class = "form-group center-block clearfix col-sm-12 mt-5">
                                    <label class="control-label col-md-12 pull-left">Deduction Count:
                                    </label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="deduction_count">
                                            @for($i=1;$i<6;$i++)
                                                <option value="{{ $i }}"
                                                        v-bind:selected="deduction_count_if({{ $i }})">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-center clearfix col-sm-12">
                                    <label class="control-label col-sm-12 pull-left"> Days of Deduction
                                    </label>
                                    <div class = "col-sm-12 clearfix">
                                        <select class="form-control" name="days_of_deduction">
                                            @for($i=1;$i<6;$i++)
                                                <option value="{{ $i }}"
                                                        v-bind:selected="days_deduction_if({{ $i }})">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-sm-12 clearfix text-right">
                                    <button type="button" class="btn btn-danger btn-sm btn-modal" data-dismiss="modal">
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