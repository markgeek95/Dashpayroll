@component('partials.header')

    @slot('title')
        Leave Table
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">


        @include('maintenance.leave_table.leave_new')
        @include('maintenance.leave_table.leave_edit')
        @include('partials.delete_modal')


        <div class="container-fluid ml-17 mr-10">
            <div class = "row">
                <div class="col-sm-12 mt-20 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Leave Table</strong>
                    </div>
                    <div class="table-responsive">

                        <div class="col-xs-6 button-groups">
                            <button type="button" class="btn btn-success btn-sm"
                                    v-on:click.prevent="leave_new_open">
                                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                <strong> New </strong>
                            </button>
                        </div>



                        <table class="table table-bordered mt-50" id="LeaveTable">
                            <thead>
                            <tr class="active">
                                <th>Code</th>
                                <th>Name</th>
                                <th>Allocated</th>
                                <th>Months</th>
                                <th>Carry Over</th>
                                <th>Cash Convertible</th>
                                <th>Max Hours to Convert</th>
                                <th>Convetible Non-taxable Hours</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$data->isEmpty())
                                @foreach($data as $row)
                            <tr>
                                <td>{{ $row->code }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->allocated }}</td>
                                <td>{{ $row->months }}</td>
                                <td>{{ ($row->carry_over == 'Y')? 'Yes' : 'No' }}</td>
                                <td>{{ ($row->cash_convertible == 'Y')? 'Yes' : 'No' }}</td>
                                <td>{{ $row->max_hours_to_convert }}</td>
                                <td>{{ $row->convertible_non_taxable_hours }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary"
                                    v-on:click="leave_edit({{ $row->id }})">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>&nbsp;
                                    <button class="btn btn-sm btn-danger"
                                            v-on:click="global_delete({{ $row->id }}, 'leave_delete')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="4">
                                        <strong class="text-danger">No data available on table.</strong>
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





















