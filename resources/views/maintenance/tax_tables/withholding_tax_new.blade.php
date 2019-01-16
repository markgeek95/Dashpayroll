<div class="modal fade" id="withholding_tax_modal" role="dialog">
            <div class="modal-dialog modal-open">

                @include('messages.loader_notification')

              <div class="modal-content">
                <div class="modal-header addColor">
                  <div class="modal-title mdl-title text-center">
                    <strong class="font-title"> 
                      <i class="fa fa-line-chart" aria-hidden="true"></i> New Tax 
                    </strong>0
                    <a class="btn-closing pull-right" data-dismiss="modal">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                  </div>  
                </div>
                <div class="modal-body">
                  <div class = "container-fluid">
                    <div class="row">

                      @include('messages.vue_errors')

                      <form v-on:submit.prevent="witholding_tax_submit($event)">

                        {{  csrf_field() }}

                      <div class="form-group-sm"> 

                        <div class="form-group center-block clearfix col-sm-12 mt-5">
                          <label class="control-label col-sm-12 pull-left">
                            Frequency:
                          </label>
                          <div class="col-sm-12">
                            <select name="frequency" class="form-control select2" style="width: 100%">
                              <option>--Select</option>
                              <option v-for="fr in frequency" v-bind:value="fr.id">
                                @{{ fr.name }}
                              </option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group center-block clearfix col-sm-12 mt-5">
                          <label class="control-label col-xs-12 pull-left">
                            Range:
                          </label>
                          <div class = "col-xs-12 clearfix">
                            <input type="text" class="form-control" name="range" autocomplete="off" />
                          </div>
                        </div>

                        <div class="form-group center-block clearfix col-sm-12 mt-5">
                          <label class="control-label col-xs-12 pull-left"> Percentage:
                          </label>
                          <div class="col-xs-12">
                            <input type="text" class="form-control" name="percentage" autocomplete="off" />
                          </div>
                        </div>

                        <div class="form-group center-block clearfix col-sm-12">
                          <label class="control-label col-xs-11 pull-left"> Amount:</label>
                          <div class="col-xs-12">
                            <input type="text" class="form-control" name="amount" autocomplete="off" />
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