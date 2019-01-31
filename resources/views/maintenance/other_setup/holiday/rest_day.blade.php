@component('partials.header')

    @slot('title')
        Rest Day Table
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">


        @include('maintenance.other_setup.holiday.rest_day_new')


        <div class="tab">
            @include('maintenance.other_setup.holiday.tabs')
        </div>



        <div class="container-fluid mt-10">
            <div class="row">
                <div class="col-xs-11 ml-17 panelfk mb-20">
                    <div class="alert alert-primary col-xs-12">
                        <strong> Rest Day Table Lists</strong>
                    </div>
                    <div class="col-xs-12 clearfix">
                        <div class="table-responsive">

                            <div class="wrapper col-xs-6">
                                <div class="col-xs-4 myBtndiv">
                                    <button type="submit" class="btn btn-success btn-sm"
                                            v-on:click="rest_day_new">
                                        <i class="fa fa-plus" aria-hidden="true"></i> New
                                    </button>
                                </div>
                            </div>

                            <table class="table table-bordered" id="holidayTableList">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Day</th>
                                    <th>Rest Day</th>
                                    <th>Shift</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody id="updateTable">
                                @if(!$rest_day->isEmpty())
                                    @foreach($rest_day as $row)
                                        <tr>
                                            <td>{{ $row->code }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ Carbon::parse($row->date)->format('D') }}</td>
                                            <td>{{ Carbon::parse($row->date)->toFormattedDateString() }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">
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





















