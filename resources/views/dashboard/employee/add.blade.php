@component('partials.header')

    @slot('title')
        Employee File Information
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

        <!-- Main Content Goes Here -->


        <div class="container-fluid ml-20 mr-20 mt-20">
            <div class="row">
                <div class="col-md-12 mt-20 mb-20 paneltable" id="companyform">
                    <div class="row" >  

                        <div class="col-md-12">   
                            <div class="alert alert-success">
                                <strong> 
                                    <i class="fa fa-user" aria-hidden="true"></i> 
                                    Add Employee 
                                </strong>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <form action="{{ url('employee') }}" class="form-horizontal" method="POST"
                                        id="employee_registration_form">

                                            {{ csrf_field() }}

                                            <div class="col-md-6">
                                                <div class="form-group @if($errors->has('id')) has-error @endif">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        ID <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="id" class="form-control" 
                                                        placeholder="Enter ID" value="{{ old('id') }}" />
                                                        @if ($errors->has('id'))
                                                            <span class="help-block">
                                                                {{ $errors->first('id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('last_name')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Last Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="last_name" class="form-control" 
                                                        placeholder="Enter Last Name" value="{{ old('last_name') }}" />
                                                        @if ($errors->has('last_name'))
                                                            <span class="help-block">
                                                                {{ $errors->first('last_name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('first_name')) has-error @endif">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        First Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="first_name"  class="form-control" 
                                                        placeholder="Enter First Name" value="{{ old('first_name') }}" />
                                                        @if ($errors->has('first_name'))
                                                            <span class="help-block">
                                                                {{ $errors->first('first_name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('middle_name')) has-error @endif">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        Middle Name <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="middle_name" class="form-control"
                                                        placeholder="Enter Middle Name" value="{{ old('middle_name') }}" />
                                                        @if ($errors->has('middle_name'))
                                                            <span class="help-block">
                                                                {{ $errors->first('middle_name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('suffix')) has-error @endif">
                                                    <label class ="control-label col-sm-4  text-info">
                                                        Suffix <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="suffix" class="form-control">
                                                            <option value="">--Select--</option>
                                                            @foreach($suffixes as $suffix)
                                                                <option value="{{ $suffix->id }}"
                                                                @if(old('suffix') == $suffix->id) selected @endif>
                                                                    {{ $suffix->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('birthdate')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Birthdate <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="date" name="birthdate"  class="form-control"
                                                        placeholder="Enter Birthdate" value="{{ old('birthdate') }}" />
                                                        @if ($errors->has('birthdate'))
                                                            <span class="help-block">
                                                                {{ $errors->first('birthdate') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('gender')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Gender <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="gender">
                                                            <option value="">--Select--</option>
                                                            <option value="M"
                                                            @if(old('gender') == 'M') selected @endif>
                                                            Male</option>
                                                            <option value="F" 
                                                            @if(old('gender') == 'F') selected @endif>
                                                            Female</option>
                                                        </select>
                                                        @if ($errors->has('gender'))
                                                            <span class="help-block">
                                                                {{ $errors->first('gender') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                

                                            </div>

                                            <div class="col-md-6">


                                                <div class="form-group @if($errors->has('shift')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Shift <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="shift" class="form-control">
                                                            <option value="">--Select--</option>
                                                            @foreach($shifts as $shift)
                                                                <option value="{{ $shift->id }}"
                                                                @if(old('shift') == $shift->id) selected @endif>
                                                                    {{ $shift->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('shift'))
                                                            <span class="help-block">
                                                                {{ $errors->first('shift') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('position')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Position <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="position" class="form-control">
                                                            <option value="">--Select--</option>
                                                            @foreach($positions as $position)
                                                                <option value="{{ $position->id }}"
                                                                @if(old('position') == $position->id) selected @endif>
                                                                    {{ $position->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('position'))
                                                            <span class="help-block">
                                                                {{ $errors->first('position') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('department')) has-error @endif">
                                                    <label class="control-label col-sm-4  text-info">
                                                        Department <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select name="department" class="form-control">
                                                            <option value="">--Select--</option>
                                                            @foreach($departments as $department)
                                                                <option value="{{ $department->id }}"
                                                                @if(old('department') == $department->id) selected @endif>
                                                                    {{ $department->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('department'))
                                                            <span class="help-block">
                                                                {{ $errors->first('department') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>



                                                <div class="form-group @if($errors->has('address')) has-error @endif">
                                                    <label class ="control-label col-sm-4  text-info">
                                                        Address <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="address"
                                                        placeholder="Enter Address">{{ old('address') }}</textarea>
                                                        @if ($errors->has('address'))
                                                            <span class="help-block">
                                                                {{ $errors->first('address') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('zip_code')) has-error @endif">
                                                    <label class ="control-label col-sm-4 text-info">
                                                        Zip Code <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="zip_code" class="form-control" 
                                                        placeholder="Enter Zip Code" value="{{ old('zip_code') }}">
                                                        @if ($errors->has('zip_code'))
                                                            <span class="help-block">
                                                                {{ $errors->first('zip_code') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group @if($errors->has('contact_no')) has-error @endif">
                                                    <label class="control-label col-sm-4 text-info">
                                                        Contact No. <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="number" name="contact_no"  class="form-control" 
                                                        placeholder="Contact no.." value="{{ old('contact_no') }}" />
                                                        @if ($errors->has('contact_no'))
                                                            <span class="help-block">
                                                                {{ $errors->first('contact_no') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group @if($errors->has('email')) has-error @endif">
                                                    <labeL class="control-label col-sm-4 text-info">
                                                        Email <span class="text-red">*</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="email" class="form-control" 
                                                        placeholder="Enter Email Adress" value="{{ old('email') }}">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                {{ $errors->first('email') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                

                                            <div class="clearfix"></div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="form-horizontal mt-10 center-block clearfix col-md-12">
                            <div class = "col-md-12 text-right">    
                                <a href="dashboard/EmployeeFile">
                                    <a href="" class="btn btn-danger btn-sm mt-10">
                                        <i class="fa fa-times"></i> Cancel
                                    </a> 
                                </a>
                                <button type="submit" class="btn btn-lg btn-success btn-sm mt-10 full_loader_show" 
                                form="employee_registration_form">
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

    <script>
        $(document).on('change', '.company_image', function(event){
            var fileUpload = event.target.files;
            $('.fileShowingImage').val(fileUpload[0].name);
        });
    </script>
@endsection



@endcomponent





















