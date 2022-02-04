<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Glitch</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,600;1,900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,200;0,300;0,500;0,800;0,900;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bungee&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,600;1,900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,200;0,300;0,500;0,800;0,900;1,600;1,700&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- bootsrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        {{-- navbar --}}
        <nav class="navbar_header" id="navbar">
            <div class="row justify-content-around">
                {{-- leftnavbar --}}
                <div class="left_bar col-4 d-flex justify-content-center align-items-center">
                    <div class="nav_square">
                        <router-link to="/" class="nav_link">Home</router-link>
                    </div>
                    <div class="nav_square">
                        <router-link to="/about" class="nav_link">About</router-link>
                    </div>
                </div>
                {{-- centralnavbar/ logo  --}}
                <div class="central_bar col-4 d-flex justify-content-center align-items-center">
                    <glitch-component></glitch-component>
                </div>
                {{-- rightnavbar --}}
                <div class="right_bar col-4 d-flex justify-content-center align-items-center">
                    <div class="nav_square">
                        <router-link to="/games" class="nav_link">Games</router-link>
                    </div>
                    <div class="nav_square">
                        <router-link to="/contacts" class="nav_link">Contacts</router-link>
                    </div>
                </div>
            </div>
        </nav>
          {{-- end_navbar --}}
        <main class="py-4">
            @yield('content')
            <router-view></router-view>
        </main>
    </div>
</body>
</html>
