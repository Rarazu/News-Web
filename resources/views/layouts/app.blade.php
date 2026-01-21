<!DOCTYPE html>
<html>
<head>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar')

    @yield('content')
</body>
</html>
