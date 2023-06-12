<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <!-- header same -->
    @include('layouts.header')

    <!-- main content difference -->
    <div class="container-fluid">
        @yield('main')
    </div>

    <!-- footer same -->
    @include('layouts.footer')

    <script src="{{asset('css/bootstrap.bundle.js')}}"></script>
</body>
</html>