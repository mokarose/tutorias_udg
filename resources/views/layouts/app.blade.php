<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/require.min.js') }}"></script>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{URL:: asset('assets/css/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Dashboard Core -->
    <link href="{{ URL::asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/js/dashboard.js') }}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ URL::asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ URL::asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ URL::asset('assets/plugins/input-mask/plugin.js') }}"></script>

</head>
<body class="">
    <div class="page">
        <div class="page-main">
            
            @include('layouts.menu')
            
            <div class="m-4"> 
                @yield('content')
            </div>
        </div> 
        
        @include('layouts.footer')
    </div>
</body>
</html>

