@component('partials.header')

    @slot('title')
        New Payroll User
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

        <div class="tab">
        </div>

        <div class="container-fluid" >

            <form class="form-horizontal addMemberForm" method="POST" action="{{ url('new_payroll_user') }}">

                {{ csrf_field() }}

            <div class="col-md-12 mt-20" id="companyform">
                <div class="row" style="border-right: 2px solid #0265FE;border-left: 2px solid #0265FE;padding:50px;padding-top: 20px;">
                    <h2 class="text-info"> <li class="fa fa-plus"></li> New Payroll User</h2>

                    <div class="tab-pane fade in active mt-40">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-4  text-info" id="textAlign">
                                        Code<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="code" id="code" class="form-control"
                                               placeholder="Code" value="2" readonly="">
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('user_level')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        User Level<span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <select name="user_level" class="form-control">
                                            <option value="">--Select--</option>
                                            @foreach($user_levels as $user_level)
                                                <option value="{{ $user_level->id }}"
                                                        @if(old('user_level') == $user_level->id) selected @endif>
                                                    {{ $user_level->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('user_level'))
                                            <span class="help-block">
                                                {{ $errors->first('user_level') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('username')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Username <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Enter Username" value="{{ old('username') }}" />
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                {{ $errors->first('username') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('password')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="password" class="form-control"
                                                   placeholder="Enter Password" />
                                            <span class="input-group-addon" style="border-radius: 0"
                                            v-on:click="password_toggle">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group @if($errors->has('last_name')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Last Name<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control"
                                               placeholder="Enter Last Name" value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                {{ $errors->first('last_name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('first_name')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        First Name<span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name"  class="form-control"
                                               placeholder="Enter First Name" value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                {{ $errors->first('first_name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('middle_name')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Middle Name
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="middle_name"  class="form-control"
                                               placeholder="Enter Middle Name" value="{{ old('middle_name') }}">
                                        @if ($errors->has('middle_name'))
                                            <span class="help-block">
                                                {{ $errors->first('middle_name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('suffix')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Suffix
                                    </label>
                                    <div class="col-md-8">
                                        <select name="suffix" id="" class="form-control">
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
                            </div>
                    </div>





                    <div class="form-horizontal mt-10 center-block clearfix col-md-12">
                        <div class="mt-30">
                            <h2 class="text-info text-center mt-20"> <li class="fa fa-user"></li> User Access</h2>

                            @if ($errors->has('user_access'))
                                <div class="alert alert-danger">
                                    <label>{{ $errors->first('user_access') }}</label>
                                </div>
                            @endif

                            <table class="table table-bordered mt-30 new_payroll_user_table">
                                <thead>
                                <tr>
                                    <th>Module</th>
                                    @foreach($roles as $role)
                                        <th>{{ $role->name }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($menus as $menu)

                                    {{--<input type="hidden" name="{{ strtolower($menu->name) }}" />--}}

                                    <tr>
                                        <td>{{ $menu->name }}</td>


                                        @foreach($roles as $role)

                                            <td>
                                                <input type="checkbox"
                                                       name="{{ strtolower($menu->name).'_'
                                                           .strtolower($role->name).'_'
                                                           .$role->id }}" />
                                            </td>

                                        @endforeach

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>



                        <div class = "col-md-12 text-right">
                            <a href="adminv2/">
                                <button class="btn btn-danger btn-sm mt-10" data-dismiss="modal">
                                    <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                </button>
                            </a>
                            <button type="submit" class="btn btn-success btn-sm mt-10 full_loader_show">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            </form>

        </div>

        <div class="container-fluid mt-20">
        </div>


        {{--@include('partials.footer')--}}


    </div>


@endsection

@endcomponent

@endsection


@section('pagescript')
    <script src="{{ asset('public/js/admin/new_payroll_user.js') }}"></script>
@endsection



@endcomponent


















