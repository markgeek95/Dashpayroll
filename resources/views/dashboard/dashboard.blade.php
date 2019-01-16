@component('partials.header')

    @slot('title')
        Dashboard
    @endslot


    @section('pagestyle')
    @endsection


    @section('template')

        @component('partials.template')

            @section('content')

                <div id="page-wrapper">




                    @include('partials.footer')


                </div>


            @endsection

        @endcomponent

    @endsection



@endcomponent






















