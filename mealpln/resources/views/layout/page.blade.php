<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') ~ MealPln 1.0.0</title>
        <meta name="description" content="@yield('description')">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="pb-5">
        @include('layout.navbar')
        <div class="container mt-4">
            @yield('content')
        </div>
        @include('layout.footer')
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>