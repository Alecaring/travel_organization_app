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
            <div class="conatinerLogIn"> 

                <div class="loginTopCont">
                    <span class="loginTopContLang">
                        <small>italiano</small>
                    </span>
                    <p class="loginTopContLogo">jaune</p>
                </div>


                <div class="loginCenterCont">
                    @yield('content')
                </div>


                <div class="loginBottomCont">
                    <small>from</small>
                    <span>Jaune</span>
                </div>

            </div>
        </main>
    </div>
</body>

</html>
