<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Logix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.style')
</head>
<body>

@include('partials.header')

<main class="container mt-5">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')

</body>
</html>
