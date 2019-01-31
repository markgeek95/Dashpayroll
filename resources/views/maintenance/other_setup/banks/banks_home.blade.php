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
        @include('maintenance.other_setup.banks.banks_edit')
        @include('partials.delete_modal')





        <div class="container-fluid mr-10 ml-17 mt-40">

            <div class="row">
                <div class="col-xs-12 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Bank List</strong>
                    </div>
                    <div class="table-responsive">

                        <div class="col-xs-6 button-groups">
                            <a class="btn btn-sm btn-success" href="{{ url('banks/create') }}">
                                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                <strong>New</strong>
                            </a>
                        </div>


                        <table class="table table-bordered mt-50" id="BanksTable">
                            <thead >
                            <tr class="active">
                                <th>ID</th>
                                <th>Bank Name</th>
                                <th>RDO</th>
                                <th>Address</th>
                                <th>Servicing Branch Code</th>
                                <th>Payroll Branch Code</th>
                                <th>Bank Code</th>
                                <th>Company Code</th>
                                <th>Batch No.</th>
                                <th>Presenting Office</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$data->isEmpty())

                                @foreach($data as $bank)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $bank->bank_name }}</td>
                                        <td>{{ $bank->rdo }}</td>
                                        <td>{{ $bank->address }}</td>
                                        <td>{{ $bank->servicing_branch_code }}</td>
                                        <td>{{ $bank->payroll_branch_code }}</td>
                                        <td>{{ $bank->batch_code }}</td>
                                        <td>{{ $bank->company_code }}</td>
                                        <td>{{ $bank->batch_no }}</td>
                                        <td>{{ $bank->presenting_office }}</td>

                                        <td class="text-center col-xs-1">
                                            <button class="btn btn-primary btn-sm"
                                                v-on:click="banks_edit({{ $bank->id }})">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>&nbsp;
                                            <button class="btn btn-sm btn-danger"
                                                    v-on:click="global_delete({{ $bank->id }}, 'bank_delete')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <td colspan="11" class="text-red text-center">
                                        <strong>
                                            Banks table is currently empty.
                                        </strong>
                                    </td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
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





















