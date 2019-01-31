@component('partials.header')

    @slot('title')
        Banks
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">





        @include('maintenance.other_setup.banks.banks_tab')



            <div class="container-fluid ml-20 mr-10">
                <div class="row">
                    <div class="col-sm-12 mt-20 mb-20 paneltable" id="companyform">
                        <div class="row" >

                            <div class="col-sm-12 ">
                                <div class="alert alert-success">
                                    <strong>
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        Add Bank
                                    </strong>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <form action="{{ url('banks') }}" class="form-horizontal" method="post"
                                                  id="banks_add_form">

                                                {{ csrf_field() }}

                                                <div class = "form-group-sm">
                                                    <div class="col-sm-6">

                                                        <div class="form-group @if($errors->has('bank_name')) has-error @endif">
                                                            <label for="bank_name" class="control-label col-sm-4 text-info">
                                                                Bank Name <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="bank_name" id="bank_name"
                                                                       class="form-control" placeholder="Bank Name"
                                                                value="{{ old('bank_name') }}">
                                                                @if ($errors->has('bank_name'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('bank_name') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('address')) has-error @endif">
                                                            <label for="address" class="control-label col-sm-4 text-info">
                                                                Address <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <textarea class="form-control address" id="address"
                                                                          name="address" placeholder="Address">{{ old('address') }}</textarea>
                                                                @if ($errors->has('address'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('address') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('servicing_branch_code')) has-error @endif">
                                                            <label for="servicing_branch_code" class="control-label col-sm-4 text-info">
                                                                Servicing Branch Code <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="servicing_branch_code"
                                                                       id="servicing_branch_code" class="form-control"
                                                                       placeholder="Servicing Branch Code"
                                                                       value="{{ old('servicing_branch_code') }}"/>
                                                                @if ($errors->has('servicing_branch_code'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('servicing_branch_code') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('payroll_branch_code')) has-error @endif">
                                                            <label for="payroll_branch_code" class="control-label col-sm-4 text-info">
                                                                Payroll Branch Code <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="payroll_branch_code" class="form-control"
                                                                       id="payroll_branch_code" placeholder="Payroll Branch Code"
                                                                       value="{{ old('payroll_branch_code') }}" />
                                                                @if ($errors->has('payroll_branch_code'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('payroll_branch_code') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('bank_code')) has-error @endif">
                                                            <label for="bank_code" class="control-label col-sm-4 text-info">
                                                                Batch Code <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="bank_code"  class="form-control"
                                                                       id="bank_code" placeholder="Bank Code"
                                                                       value="{{ old('bank_code') }}"/>
                                                                @if ($errors->has('bank_code'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('bank_code') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('company_code')) has-error @endif">
                                                            <label for="company_code" class="control-label col-sm-4 text-info">
                                                                Company Code <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="company_code" class="form-control"
                                                                       id="company_code" placeholder="Company Code"
                                                                       value="{{ old('company_code') }}"/>
                                                                @if ($errors->has('company_code'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('company_code') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="form-group @if($errors->has('account')) has-error @endif">
                                                            <label for="account" class="control-label col-sm-4 text-info">
                                                                Account # <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="account"  class="form-control"
                                                                       id="account" placeholder="Account #"
                                                                       value="{{ old('account') }}"/>
                                                                @if ($errors->has('account'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('account') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('rdo')) has-error @endif">
                                                            <label for="rdo" class="control-label col-sm-4 text-info">
                                                                RDO # <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="rdo"  class="form-control"
                                                                       id="rdo" placeholder="RDO #"
                                                                       value="{{ old('rdo') }}"/>
                                                                @if ($errors->has('rdo'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('rdo') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('batch_no')) has-error @endif">
                                                            <label for="batch_no" class="control-label col-sm-4 text-info">
                                                                Batch No <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="batch_no" class="form-control"
                                                                       id="batch_no" placeholder="Batch No"
                                                                       value="{{ old('batch_no') }}" />
                                                                @if ($errors->has('batch_no'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('batch_no') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('presenting_office')) has-error @endif">
                                                            <label for="presenting_office" class="control-label col-sm-4 text-info">
                                                                Presenting Office<span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="presenting_office"  class="form-control"
                                                                       id="presenting_office" placeholder="Presenting Office"
                                                                       value="{{ old('presenting_office') }}"/>
                                                                @if ($errors->has('presenting_office'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('presenting_office') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group @if($errors->has('ceiling_amount')) has-error @endif">
                                                            <label for="ceiling_amount" class="control-label col-sm-4 text-info">
                                                                Ceiling Amount <span class="text-red">*</span>
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="ceiling_amount" class="form-control"
                                                                       id="ceiling_amount" placeholder="Ceiling Amount"
                                                                value="{{ old('ceiling_amount') }}"/>
                                                                @if ($errors->has('ceiling_amount'))
                                                                    <span class="help-block">
                                                                        {{ $errors->first('ceiling_amount') }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-horizontal mt-5 mb-20 center-block clearfix col-sm-12">
                                    <div class = "col-md-12 text-right">
                                        <a href="" class="full_loader_show">
                                            <button class="btn btn-danger btn-sm mt-10" data-dismiss="modal">
                                                <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                            </button>
                                        </a>
                                        <button type="submit" form="banks_add_form"
                                                class="btn btn-success btn-sm mt-10 full_loader_show">
                                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>








        @include('partials.footer')

    </div>






@endsection

@endcomponent

@endsection


@section('pagescript')
@endsection



@endcomponent





















