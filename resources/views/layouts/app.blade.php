<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
        <title>RIVER - Development Test</title>

        <!-- CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div id="app" class="container-fluid">
            <div class="main container-fluid">
                @yield('header')
                @yield('content')
                @yield('footer')
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
