<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Start: Head-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('custom.websiteName') }}</title>
        <link rel="shortcut icon" href="{{ asset('website/img/favicon.ico') }}" type="image/x-icon">

        <!-- PLUGINS CSS STYLE -->
            <!-- Bootstrap -->
            <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
            <!-- Fonts and icons -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
            <!-- Website CSS -->
            <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
            <!-- CUSTOM CSS -->
            <link href="{{ asset('website/css/custom.css') }}" rel="stylesheet">

        @yield('customCss')
    </head>
    <!-- END: Head-->
    <body class="body-wrapper">
        @include('website.layouts.navbar')

        @yield('content')
        
        @include('website.layouts.footer')

        <!-- jQuey -->
        <script src="{{ asset('website/js/jquery.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('website/js/popper.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    </body>
</html>
