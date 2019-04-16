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
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}  
                </div>
            @endif
            @include('layout.cruderrors')
            @yield('content')
        </div>
        @include('layout.footer')
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        <script>
            document.querySelectorAll(".alert").forEach((alert)=>{
                setTimeout(function() { alert.style.display = 'none' }, 2000);
            });
        </script>
<script>
    document.querySelectorAll(".delete").forEach((frm)=>{
      frm.addEventListener('submit', function() {
        if (!confirm("Delete this thing?")) event.preventDefault();
      });
    });
</script>
    </body>
</html>