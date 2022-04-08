<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <section class="navbar">
        <ul class="navbar__ul">
            <li class="navbar__li"><a href="/">Alle huisdieren</a></li>
            <li class="navbar__li"><a onclick="randomHuisdier()" id="randomID" href="">Bekijk een willekeurig huisdier</a></li>
            <li class="navbar__li"><a href="/huisdier/create">Voeg een huisdier toe</a></li>
            <li class="navbar__li"><a href="/dashboard">Profiel</a></li>
        </ul>
    </section>
    @yield('content')
    @yield('comments')
</body>
</html>
