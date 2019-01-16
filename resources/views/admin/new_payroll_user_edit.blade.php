@component('partials.header')

    @slot('title')
        Edit New Payroll User
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

            <form class="form-horizontal addMemberForm" method="POST" action="{{ url('new_payroll_user/'.$user->id) }}">

                {{ csrf_field('patch') }}
                {{ method_field('PATCH') }}


                <input type="hidden" name="id" value="{{ $user->id }}" />

                <div class="col-md-12 mt-20" id="companyform">
                    <div class="row" style="border-right: 2px solid #0265FE;border-left: 2px solid #0265FE;padding:50px;padding-top: 20px;">
                        <h2 class="text-info"> <i class="fa fa-plus"></i>Edit New Payroll User</h2>

                        <div class="tab-pane fade in active mt-40">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-4  text-info" id="textAlign">
                                        Code<span style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" name="code" id="code" class="form-control"
                                               placeholder="Code" value="{{ $user->code }}">
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
                                                        @if($user->user_level_id == $user_level->id) selected @endif>
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
                                               placeholder="Enter Username" value="{{ $user->username }}" />
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                {{ $errors->first('username') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group @if($errors->has('old_password')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        Old Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="old_password" class="form-control"
                                                   placeholder="Enter Old Password" />
                                            <span class="input-group-addon" style="border-radius: 0"
                                                  v-on:click="password_toggle">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        @if ($errors->has('old_password'))
                                            <span class="help-block">
                                                {{ $errors->first('old_password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if($errors->has('password')) has-error @endif">
                                    <label class ="control-label col-sm-4  text-info" id="textAlign">
                                        New Password <span   style="color:red;" class="text-red">*</span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input v-bind:type="password_user" name="password" class="form-control"
                                                   placeholder="Enter New Password" />
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
                                               placeholder="Enter Last Name" value="{{ $username->last_name }}">
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
                                               placeholder="Enter First Name" value="{{ $username->first_name }}">
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
                                               placeholder="Enter Middle Name" value="{{ $username->middle_name }}">
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
                                                        @if($username->suffix == $suffix->id) selected @endif>
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

                                            <?php
                                                // query for user roles
                                                $menu_role = App\MenuRoleUser::menu_role_user($user->id, $menu->id);
                                                $role_array = [];
                                                if ($menu_role){
                                                    $role_array = explode(',',$menu_role->role_id);
                                                }
                                            ?>

                                            @if($menu_role)
                                                <input type="hidden" name="{{ strtolower($menu->name) }}"
                                                       value="{{ $menu_role->role_id }}">
                                            @endif

                                            @foreach($roles as $role)

                                                <?php
                                                    // for selected roles
                                                    $selected = (in_array($role->id, $role_array) && $menu_role)? true : false;
                                                    // if role is disabled
                                                    $disabled = ($menu_role && in_array(2, $role_array) && $role->id != 2)? true : false;
                                                ?>

                                                <td>
                                                    <input type="checkbox"
                                                           name="{{ strtolower($menu->name).'_'
                                                           .strtolower($role->name).'_'
                                                           .$role->id }}"
                                                           @if($selected) checked @endif
                                                           @if($disabled) disabled @endif />
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>



                            <div class = "col-md-12 text-right">
                                <a href="adminv2/">
                                    <a href="" class="btn btn-danger btn-sm mt-10" >
                                        <i class="fa fa-times" aria-hidden="true"></i> Cancel
                                    </a>
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



















