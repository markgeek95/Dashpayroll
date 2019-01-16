<div id="wrapper">
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation">

        @include('partials.navigation')

        @include('partials.sidebar')

    </nav>
</div>


{{-- code with vue js --}}
<div id="vue-app">

    @yield('content')

</div>













