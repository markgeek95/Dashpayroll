@component('partials.header')

    @slot('title')
        Company Information
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

        <div class="tab">
            @include('dashboard.dashboard_tabs')
        </div>

        <!--  -->
        <div class="container-fluid" >
            <div class="col-md-12 mt-40" id="companyform">

                <form action="{{ url('company_information') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                <div class="row container_style">

                    <div class="col-md-offset-1 col-md-6 form-group-sm mt-20">
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            @if($errors->has('header')) has-error @endif" >
                            <label class="control-label col-xs-4">Report Header</label>
                            <div class="col-xs-8">
                                <textarea class="form-control company_info_form_style" name="header"
                                          placeholder="Company Header...">{{ old('header') }}</textarea>
                                @if ($errors->has('header'))
                                    <span class="help-block">
                                         {{ $errors->first('header') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            @if($errors->has('address')) has-error @endif" >
                            <label class="control-label col-xs-4">Address</label>
                            <div class="col-xs-8">
                                <textarea class="form-control company_info_form_style" name="address"
                                          placeholder="Company Address...">{{ old('address') }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                         {{ $errors->first('address') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            @if($errors->has('pagibig_no')) has-error @endif" >
                            <label class="control-label col-xs-4">Pagibig No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Pagibig no.."
                                       name="pagibig_no" autocomplete="off" value="{{ old('pagibig_no') }}"/>
                                @if ($errors->has('pagibig_no'))
                                    <span class="help-block">
                                         {{ $errors->first('pagibig_no') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            @if($errors->has('phic_no')) has-error @endif">
                            <label class="control-label col-xs-4">PHIC No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="PHIC no..."
                                       name="phic_no" autocomplete="off" value="{{ old('phic_no') }}"/>
                                @if ($errors->has('phic_no'))
                                    <span class="help-block">
                                         {{ $errors->first('phic_no') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            @if($errors->has('sss_no')) has-error @endif">
                            <label class="control-label col-xs-4">SSS No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="SSS no..."
                                       name="sss_no" autocomplete="off" value="{{ old('sss_no') }}"/>
                                @if ($errors->has('sss_no'))
                                    <span class="help-block">
                                         {{ $errors->first('sss_no') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            @if($errors->has('tin_no')) has-error @endif">
                            <label class="control-label col-xs-4">Tin No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Tin no..."
                                       name="tin_no" autocomplete="off" value="{{ old('tin_no') }}"/>
                                @if ($errors->has('tin_no'))
                                    <span class="help-block">
                                         {{ $errors->first('tin_no') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            @if($errors->has('tel_no')) has-error @endif">
                            <label class="control-label col-xs-4">Tel No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Tel no..."
                                       name="tel_no" autocomplete="off" value="{{ old('tel_no') }}"/>
                                @if ($errors->has('tel_no'))
                                    <span class="help-block">
                                         {{ $errors->first('tel_no') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            @if($errors->has('zip_code')) has-error @endif">
                            <label class="control-label col-xs-4">Zip Code</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Zip code..."
                                       name="zip_code" autocomplete="off" value="{{ old('zip_code') }}"/>
                                @if ($errors->has('zip_code'))
                                    <span class="help-block">
                                         {{ $errors->first('zip_code') }}
                                     </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 mb-20 center-block clearfix col-md-12">
                            <div class="col-sm-12 text-right mt-50">
                                <div class="clearfix"></div>
                                <button class="btn mt-20 btn-sm">Cancel</button>
                                <button class="btn btn-success mt-20 btn-sm">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-3 mt-40">
                        <div>
                            @if(Session::has('path'))
                                <img src="{{ asset(Session::get('path')) }}" class="img-responsive img-rounded">
                            @else
                                <img src="{{ asset('public/images/logo.png') }}"
                                     class="img-thumbnail img-responsive" width="100%" >
                            @endif
                        </div>

                        <div class="caption mt-10 @if($errors->has('image')) has-error @endif">
                            <div class="input-group form-group-sm ">
                                <input type="text" class="form-control fileShowingImage" readonly>
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file btn-sm">
                                        <i class="glyphicon glyphicon-cloud-upload"></i> Browse
                                        <input type="file" name="image" class="company_image" />
                                    </span>
                                </span>
                            </div>
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    {{ $errors->first('image') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="visible-xs col-xs-12 separator" style="border: 1px solid #ddd;margin-top:10px"></div>
                </div>


                </form>

            </div>
        </div>


        @include('partials.footer')

    </div>



@endsection

@endcomponent

@endsection


@section('pagescript')

    <script>
        $(document).on('change', '.company_image', function(event){
            var fileUpload = event.target.files;
            $('.fileShowingImage').val(fileUpload[0].name);
        });
    </script>
@endsection



@endcomponent





















