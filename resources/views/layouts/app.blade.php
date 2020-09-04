<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'TOP') | Laravel_OP</title>
    <meta name="description" content="@yield('description','Laravel_OPです。')">
    <meta name="keywords" content="@yield('keywords','STEP,ステップ')">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="{{ asset('/js/flash.js') }}"></script>
    <script src="{{ asset('/js/count.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="l-header">
            <div class="c-site-width header-wrapper">
                <h1 class="l-logo">
                    <a href="{{ route('memo.index') }}" class="l-logoText">Laravel_OP</a>
                </h1>

                <nav class="l-nav">
                    <ul class="l-ul">
                        @guest
                            <li class="l-li">
                                <a href="{{ route('login') }}" class="l-a">LOGIN</a>
                            </li>
                            <li class="l-li">
                                <a href="{{ route('register')}}" class="l-a">REGISTER</a>
                            </li>
                        @else
                            <li class="l-li">
                                <a href="{{ route('memo.index') }}" class="l-a">INDEX</a>
                            </li>
                            <li class="l-li">
                                <a href="{{ route('memo.new') }}" class="l-a">CREATE</a>
                            </li>
                            <li class="l-li">
                                <a href="{{ route('home') }}" class="l-a">MYPAGE</a>
                            </li>
                            <li class="l-li">
                                <a href="{{ route('logout') }}" class="l-a">LOGOUT</a>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>
<!--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
<!--            <div class="container">-->
<!--                <a class="navbar-brand" href="{{ url('/') }}">-->
<!--                    {{ config('app.name', 'Laravel') }}-->
<!--                </a>-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
<!--                    <ul class="navbar-nav mr-auto">-->
<!---->
<!--                    </ul>-->
<!---->
                    <!-- Right Side Of Navbar -->
<!--                    <ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
<!--                        @guest-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
<!--                            </li>-->
<!--                            @if (Route::has('register'))-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
<!--                                </li>-->
<!--                            @endif-->
<!--                        @else-->
<!--                            <li class="nav-item dropdown">-->
<!--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
<!--                                    {{ Auth::user()->name }} <span class="caret"></span>-->
<!--                                </a>-->
<!---->
<!--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
<!--                                    <a class="dropdown-item" href="{{ route('logout') }}"-->
<!--                                       onclick="event.preventDefault();-->
<!--                                                     document.getElementById('logout-form').submit();">-->
<!--                                        {{ __('Logout') }}-->
<!--                                    </a>-->
<!---->
<!--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
<!--                                        @csrf-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        @endguest-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->
        <!--    フラッシュメッセージ-->
        @if (session('flash_message'))
        <div class="p-flash js-flash-message">
            {{ session('flash_message') }}
        </div>
        @endif
        <!--    フラッシュメッセージ終わり-->
        <main class="main">
            @yield('content')
        </main>
    </div>
</body>
</html>
