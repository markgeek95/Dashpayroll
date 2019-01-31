@component('partials.header')

    @slot('title')
        Overtime Night Differential List
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">




        @include('maintenance.other_setup.overtime_nightdifferential.tab')
        @include('maintenance.other_setup.overtime_nightdifferential.overtime_nightdifferential_new')
        @include('maintenance.other_setup.overtime_nightdifferential.overtime_nightdifferential_edit')

        <div class="container-fluid mt-10">


            <div class="row">
                <div class="col-xs-11 ml-17 panelfk mb-20">
                    <div class="alert alert-primary col-xs-12">
                        <strong> Overtime/ Night Differential List</strong>
                    </div>
                    <div class="col-xs-12 clearfix" style="margin-left: -1.5%;">
                        <div class="table-responsive">
                            <div class="wrapper col-xs-5">
                                <div class="col-xs-12 myBtndiv">
                                    <button type="submit" class="btn btn-success btn-sm"
                                    v-on:click="open_night_differential_modal">
                                        <i class="fa fa-plus" aria-hidden="true"></i> New
                                    </button>
                                </div>
                            </div>
                            <table class="table table-bordered" id="holidayTableList">
                                <thead>
                                <tr class="active">
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>OT (Overtime)</th>
                                    <th>ND (Night Differential)</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody id="updateTable">
                                @if(!$data->isEmpty())
                                    @foreach($data as $row)
                                        <tr>
                                            <td>{{ $row->code }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->ot }}</td>
                                            <td>{{ $row->nd }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm"
                                                v-on:click="overtime_nightdifferential_edit({{ $row->id }})">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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


        </div>



        @include('partials.footer')

    </div>






@endsection

@endcomponent

@endsection


@section('pagescript')
@endsection



@endcomponent





















