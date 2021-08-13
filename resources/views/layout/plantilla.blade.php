<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
        pre {
            text-align: center;
        }
    </style>
</head>
<body>
    @include('layout.partials.header')
    @yield('content')
    @include('layout.partials.footer')
</body>
</html>
