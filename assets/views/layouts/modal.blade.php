<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- styles -->
    <link href="/css/admin.css" rel="stylesheet" type="text/css">

    @yield('css')

</head>

<body>

<div>

    <div class="container">
        <div class="h-100 row align-items-center mx-2">
            <div class="my-3" style="margin: auto;">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@yield('js')

</body>
</html>