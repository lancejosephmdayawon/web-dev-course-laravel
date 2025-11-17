<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <title>Blog Management System</title>
</head>

<body>
    @include('layout.nav')
    @yield('content')
    @include('layout.foot')
</body>

</html>