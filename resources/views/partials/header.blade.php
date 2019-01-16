<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    {{-- fonts --}}
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/plugins/toastr/toastr.min.css') }}" />
    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/btnripple.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}" />
    {{--<link rel="stylesheet" href="{{ asset('public/css/timepicker.css') }}" />--}}
    <link rel="stylesheet" href="{{ asset('public/css/burgerIcon.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/hover.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/styledatatable.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/holidayAndRestday.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/maintenance.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/admin_css.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/plugins/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/plugins/lte/adminlte.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/master.css') }}" />


    {{-- custom styles goes here --}}
    @yield('pagestyle')


</head>
<body>


{{--@include('messages.full_loader')--}}

@include('messages.window_loader')



@yield('template')







{{-- scripts --}}

<script src="{{ asset('public/plugins/vue/vue.js') }}"></script>

<script src="{{ asset('public/plugins/js/jquery/jquery.js') }}"></script>
<script src="{{ asset('public/plugins/js/datatables.js') }}"></script>
<script src="{{ asset('public/plugins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/plugins/js/burger.js') }}"></script>
<script src="{{ asset('public/plugins/js/metisMenu.min.js') }}"></script>
{{--<script src="{{ asset('public/plugins/js/timepicker.js') }}"></script>--}}
<script src="{{ asset('public/plugins/js/wow.min.js') }}"></script>
<script src="{{ asset('public/plugins/js/datatableOn.js') }}"></script>
<script src="{{ asset('public/plugins/js/sweetalert2.all.min.js') }}"></script>

<!-- <script src="{{ asset('public/plugins/lte/adminlte.min.js') }}"></script> -->

<script src="{{ asset('public/plugins/toastr/toastr.min.js') }}"></script>

<script src="{{ asset('public/plugins/select2/dist/js/select2.full.min.js') }}"></script>

{{-- other plugin scripts goes here --}}
@yield('pluginscript')

<script src="{{ asset('public/plugins/js/custom.js') }}"></script>
<script src="{{ asset('public/plugins/js/modal.js') }}"></script>
<script src="{{ asset('public/plugins/js/maintenance.js') }}"></script>
<script src="{{ asset('public/plugins/js/holidayrestday.js') }}"></script>


@include('messages.toastr')


<script src="{{ asset('public/vue/vue-app.js') }}"></script>

<script src="{{ asset('public/master.js') }}"></script>


{{-- custom scripts goes here --}}
@yield('pagescript')




</body>
</html>
