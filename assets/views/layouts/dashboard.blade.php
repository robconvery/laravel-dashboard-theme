<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    @yield('css')

    @yield('head-js')

</head>

<body>

    <div>

        <nav class="navbar navbar-expand-lg navbar-light bg-navbar border-bottom">

            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="/images/logo.jpg" class="nav-logo">
                {{ config('app.name') }}
            </a>

            <div class="ml-auto">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>

        <div class="container-fluid">

            <div class="row">

                <div class="collapse navbar-collapse sidebar" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item{{{ Request::is('dashboard') ? ' active' : '' }}}">
                            <a class="nav-link border-bottom" href="{{ route('home') }}">
                                <i class="far fa-calendar-alt"></i>
                                Diary
                            </a>
                        </li>

                    </ul>
                </div>

                <main role="main" class="col-lg-10 ml-lg-auto px-4 bg-dashboard border-left">

                    @yield('content')

                </main>
            </div>
        </div>

<script src="{{ asset('js/app.js') }}"></script>

@yield('js')

</body>
</html>
