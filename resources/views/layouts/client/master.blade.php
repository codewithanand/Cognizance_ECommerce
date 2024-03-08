<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('client/favicon.png')}}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <title>
        @yield('title')
    </title>
    @include('layouts.client.styles')
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('layouts.client.navbar')
    <!-- End Header/Navigation -->

    @yield('content')

    <!-- Start Footer Section -->
    @include('layouts.client.footer')
    <!-- End Footer Section -->


    @include('layouts.client.scripts')
</body>

</html>
