@component('partials.header')

    @slot('title')
        Cost Center
    @endslot


@section('pagestyle')
@endsection


@section('template')

    @component('partials.template')

@section('content')

    <div id="page-wrapper">




        @include('maintenance.other_setup.cost_center.cost_center_new')
        @include('partials.delete_modal')


        <div class="container-fluid mr-10 ml-17">
            <div class="row">

                @include('maintenance.other_setup.cost_center.cost_center_list')

                @include('maintenance.other_setup.departments.employee_list')

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





















