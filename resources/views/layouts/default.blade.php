<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'August 5th')</title>
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
</head>
<body class="antialiased font-sans bg-gray-200">
<div class="">
    <div class="relative bg-white overflow-hidden">
    @yield('content')
    </div>
</div>
</body>
</html>
