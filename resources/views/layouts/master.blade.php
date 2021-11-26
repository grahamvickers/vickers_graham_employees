<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/yqf8dhe.css">

        <!-- Styles -->
        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <header id="mainHead">
            <img src="/images/rh_logo.svg" alt="Royal Hunt Logo" id="logo">
            <nav id="mainNav">
                <h2 class="hidden">Main Navigation</h2>
                <ul>
                    <li><a href="/employees">HOME</a></li>
                    <li><a href="/employees/create">CREATE</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p id="footP">DESIGNED & DEVELOPED BY GRAHAM VICKERS &COPY;</p>
        </footer>
    </body>
</html>
