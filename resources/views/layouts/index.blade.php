<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen">
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>
