<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Start: Head-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krushna Vel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Fonts and icons -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">

        @yield('customCss')
    </head>
    <!-- END: Head-->

    @yield('content')

    <!-- BEGIN jQuery JS-->
        <script src="{{ asset('js/core/jQuery.min.js') }}" type="text/javascript"></script>
    <!-- END jQuery JS-->

    <script src="{{ asset('js/core/app.min.js') }}" type="text/javascript"></script>
</html>
