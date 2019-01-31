@component('partials.header')

    @slot('title')
        Employee Status
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">




        <div class="tab">
            <ul class="tabs col-xs-12">
                <li class="current"><a href="maintenance/employeestatus">Employee Status</a></li>
            </ul> <!-- / tabs -->
        </div>

        <div class="container-fluid mt-10">
            <div class="row">

                <div class="col-xs-11 ml-17 mb-20 panelfk ">


                    @include('maintenance.other_setup.employee_status.employee_status_new')

                    @include('maintenance.other_setup.employee_status.employee_status')

                    @include('maintenance.other_setup.class_list.employee_list')

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





















