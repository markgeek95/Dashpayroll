@component('partials.header')

    @slot('title')
        Class List
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">




{{--        @include('maintenance.other_setup.cost_center.cost_center_new')--}}
        @include('partials.delete_modal')


        <div class="container-fluid mt-10">
            <div class="row">


                <div class="col-xs-11 ml-17 mb-20 panelfk ">

                    <div class="alert alert-primary col-xs-12 ">
                        <strong> Class List</strong>
                    </div>



                @include('maintenance.other_setup.class_list.class_list')

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





















