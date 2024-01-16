<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVMaker @yield('title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    @yield('content')
</body>
</html>