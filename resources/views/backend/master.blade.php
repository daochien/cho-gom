<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cho gom - @yield('title')</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://chat.todo.vn/images/ico/android-icon-192x192.png">

    <!-- App css -->
    <link href="{{asset('app/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('app/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('app/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    @stack('css')
</head>
<body class="{{ @$class }}">

    @yield('content')

    @stack('scripts')

    <!-- Vendor js -->
    <script src="{{asset('app/assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('app/assets/js/app.min.js')}}"></script>
</body>
</html>
