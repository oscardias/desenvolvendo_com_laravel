<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $titulo or 'Desenvolvendo com Laravel' }}</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
    <body>
        @include('templates.menu')
        
        <div class="container">
            @yield('content')
        </div>
        
        <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>