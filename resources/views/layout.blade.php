<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Itališkas Restoranas</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <nav>
        <a href="/categories/create">Sukurti kategoriją</a>
        <a href="/meniu-items/create">Priskirti patiekalą</a>
    </nav>
    <h1>Testing</h1>
    @yield('content')
</body>
</html>