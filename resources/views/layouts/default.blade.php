<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Control | @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link rel="icon" type="image/svg" href="images/fav.svg">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ (env('APP_ENV') === 'development') ? mix('css/app.css') : asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body id="main-container">
        @include('headers.default')
        @yield('content')
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
      (function () {
        const selectInputs = document.querySelectorAll('select');
        const navigations = document.querySelectorAll('.sidenav');

        M.Sidenav.init(navigations, []);
        M.FormSelect.init(selectInputs, []);
      })();
    </script>
</html>
