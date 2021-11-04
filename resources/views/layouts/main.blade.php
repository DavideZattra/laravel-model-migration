<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('cd-entrypoint')

    <title>@yield('title', 'Home')</title>

</head>
<body>
    
    @include('partials.header')

    <main>

        @yield('content')

    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script-entrypoint')
    
</body>
</html>