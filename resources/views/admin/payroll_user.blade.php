@component('partials.header')

    @slot('title')
        Payroll User
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">

        <div class="tab">
            @include('admin.payroll_tabs')
        </div>

        <div class="container-fluid">

            <div class="col-md-12 mt-20" id="companyform">
                <div class="row container_style" >
                    <h2 class="text-info">
                        <i class="fa fa-users"></i> Payroll User
                    </h2>

                    <div id="tableSort" class="table-responsive panelcontent mt-40">

                        <div class = "col-xs-6 button-groups" style="z-index: 100">

                                <a href="{{ url('new_payroll_user') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> New
                                </a>

                            <button class="btn btn-info btn-file">
                                <i class="glyphicon glyphicon-cloud-upload"></i> Import
                                <input type="file" multiple>
                            </button>

                        </div>

                        <table class="table table-bordered" id="dadasTable" >
                            <thead>
                                <tr class="active">
                                    <th>Code</th>
                                    <th>User Level</th>
                                    <th>User Name</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(!$users->isEmpty())
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->code_id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->last_name.' '.$user->first_name.' '.$user->middle_name }}</td>

                                    <?php
                                        $pass = App\Secret::decrypt_pass($user->uid);
                                    ?>

                                    <td class="text-center">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="password" class="form-control password_holder"
                                                       value="{{ $pass }}" readonly="">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary btn-default"
                                                            type="button" v-on:click="decrypt_encrypt($event)">
                                                            <span class="fa fa-eye-slash"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <a href="adminv2/viewpayrolluser/">
                                            <a href="{{ url('new_payroll_user/'.$user->uid.'/edit') }}"
                                               class="btn btn-default btn-sm">
                                                <i class="fa fa-book fa-sm"></i> View
                                            </a>
                                        </a>
                                        <a href="{{ url('new_payroll_user/'.$user->uid.'/edit') }}"
                                           class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o fa-sm"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else

                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

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


















