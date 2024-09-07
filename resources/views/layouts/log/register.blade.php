<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <main>
            <div class="conatinerRegister">

                <div class="registerTopCont">
                    <a class="text-white" href="{{ route('login') }}"><span><svg xmlns="http://www.w3.org/2000/svg"
                                width="22" height="22" fill="currentColor" class="bi bi-chevron-left"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                            </svg></span></a>
                    <span>Registrati</span>
                    <span class="invisible"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg></span>

                    @if (Route::currentRouteName() == 'register.step1')
                        <div class="line" style="left: -66%;"></div>
                    @endif
                    @if (Route::currentRouteName() == 'register.otp')
                        <div class="line" style="left: -33%;"></div>
                    @endif
                    @if (Route::currentRouteName() == 'register.step2')
                        <div class="line" style="left: -0%;"></div>
                    @endif

                </div>


                @yield('content')


                <div class="registerBottomCont">
                    <small>from</small>
                    <span>Jaune</span>
                </div>

            </div>
        </main>
    </div>
</body>

</html>
