<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="{{ url('/materialize/css/materialize.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ url('/materialize/js/materialize.min.js') }}"></script>
    </head>
    <body>
        Hola
     <div class="container">
       @yield('content')
     </div>
    </body>
</html>
