<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Control | @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="{{ (env('APP_ENV') === 'development') ? mix('css/app.css') : asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body id="main-container">
        @include('headers.default')
        @yield('content')
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r119/three.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.19/vanta.waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
      (function () {
        const selectInputs = document.querySelectorAll('select');
        const navigations = document.querySelectorAll('.sidenav');

        M.Sidenav.init(navigations, []);
        M.FormSelect.init(selectInputs, []);

        VANTA.WAVES({
          el: "#main-container",
          mouseControls: false,
          touchControls: false,
          gyroControls: false,
          minHeight: 500.00,
          minWidth: 500.00,
          scale: 1.00,
          scaleMobile: 1.00,
          color: "#ef5350",
          shininess: 33.00,
          waveHeight: 5.50,
          waveSpeed: 0.55,
          zoom: 0.65
        })
      })();
    </script>
</html>
