<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('frontend/css/bootstrap.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/plugin.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/base.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/evo-main.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/slick.scss.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    @stack('css')

</head>
<body class="{{ @$class }}">
    @stack('header_js')

    @include('frontend.layout.header', ['class_menu' => $menu])

    @yield('content')

    @include('frontend.layout.footer')

    @stack('js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>

</body>
</html>
