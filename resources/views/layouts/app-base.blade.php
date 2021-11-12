<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/img/favicon-150x150.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('/img/favicon-600x600.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{ asset('/img/favicon-600x600.png') }}"/>
    <meta name="msapplication-TileImage" content="{{ asset('/img/favicon-600x600.png') }}"/>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="h-screen bg-gray-200">
<div id="app" class="flex flex-col min-h-full m-auto font-sans antialiased text-gray-900 bg-gray-200"
     style="max-width: 1440px">
    <header style="background-color: #17263A;">
        <div class="logo-div flex items-center justify-between container">
            <h1>Book::worm</h1>
        </div>
    </header>
    <div class="flex-grow bg-white">
        @yield('content')
    </div>
    <footer class="pt-2 pb-2 text-center text-white" style="background-color: #17263A;">



    </footer>
</div>
</body>
</html>
