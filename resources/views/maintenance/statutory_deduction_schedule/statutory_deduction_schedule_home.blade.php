@component('partials.header')

    @slot('title')
        Statutory Deduction Schedule
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">



        @include('maintenance.statutory_deduction_schedule.statutory_deduction_schedule_add')
        @include('maintenance.statutory_deduction_schedule.statutory_edit')
        @include('partials.delete_modal')


        <div class="container-fluid ml-17 mr-10">
            <div class="row">
                <div class="col-sm-12 mt-20 mb-20 paneltable">
                    <div class="alert alert-primary">
                        <strong>Statutory Deduction Table</strong>
                    </div>
                    <div class="table-responsive">
                        <div class = "col-xs-6 button-groups">
                            <button class="btn btn-success btn-sm" v-on:click="statutory_add_modal">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <strong> New </strong>
                            </button>
                        </div>


                        <table class="table table-bordered" id="StatutoryTable">
                            <thead>
                                <tr class="thead-primary">
                                    <th>Code</th>
                                    <th>Frequency</th>
                                    <th>Deduction Name</th>
                                    <th>Deduction Count</th>
                                    <th>Day of Deduction</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!$data->isEmpty())
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->code }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->deduction_name }}</td>
                                        <td>{{ $row->deduction_count }}</td>
                                        <td>{{ $row->days_of_deduction }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"
                                                    v-on:click="statutory_edit({{ $row->id }})">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger"
                                                    v-on:click="global_delete({{ $row->id }}, 'statutory_delete')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
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





















