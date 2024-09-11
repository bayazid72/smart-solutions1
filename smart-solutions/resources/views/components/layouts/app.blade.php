<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('stijl.css') }}">
    <title>@yield('title', 'Mijn Website')</title>
</head>
<body>
    <header>
        <x-navbar />
    </header>
    <main>
        {{$slot}}
    </main>
    <footer>
        <x-footer/>
    </footer>
</body>
</html>
