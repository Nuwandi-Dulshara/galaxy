<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>

    @include('libraries.styles')
    @stack('styles')

    <style>
    body {
        margin: 0;
        padding: 0;
        background: #ffffff;
    }
    </style>
</head>
<body class="index-page">

    @include('components.nav')
    <main class="main content-wrapper"">

    @yield('pageContent')
    </main>
    @include('components.footer')
    @include('libraries.scripts')

    @stack('scripts')
</body>
</html>
