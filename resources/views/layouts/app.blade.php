<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-name" content="{{optional(Auth::user())->name}}">
    <meta name="user-id" content="{{optional(Auth::user())->id}}">
    <meta name="email" content="{{optional(Auth::user())->email}}">
    <meta name="theme" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="topbar">
        <v-app>
            <?php /*<nav class="navbar navbar-expand-md navbar-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <v-img src="../images/UoG_White.png" width="15%" ></v-img>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>*/ ?>
            
            @if (\Request::is('/'))
                @else
                <nav class="navbar navbar-expand-md navbar-dark ">
                <div class="container">
            <v-app-bar
                absolute
                color="#353637"
                dark
                flat
                
            >
                
                @guest
                <a class="navbar-brand" href="{{ url('/') }}" style="width: 10%;">
                    <v-img src="../images/UoG_White.png" width="100%" ></v-img>
                </a>
                <v-spacer></v-spacer>
                <v-btn href="{{ route('login') }}" color="primary" style="text-decoration: none; text-transform: none" tile>Login</v-btn>
                &nbsp;
                <v-btn href="{{ route('register') }}" outlined color="white" style="text-decoration: none; text-transform: none" tile text>Register</v-btn>
                @else
                <nav-bar/>
                
                @endguest
                
            </v-app-bar>
            </div>
            </nav>
            @endif
            
            
            <main class="py-8">
                @yield('content')
            </main>
        </v-app>
        @if (\Request::is('/'))
        @else
        <v-card height="10">
            <v-footer padless dark tile>
                <v-col class="text-center" cols="12">
                    University of Gloucestershire
                </v-col>
            </v-footer>
        </v-card>
        @endif
    </div>
</body>

</html>

<style>
    .py-8 {
        background-color: #ece8f6;
        background-image: url("../images/mesh-tile-dark.png");
        background-repeat: repeat;
        height: 100%;
    }

    
</style>

<script>
let themeData = "test??";
</script>
