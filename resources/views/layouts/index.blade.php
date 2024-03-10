<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    @include('layouts.css')
    @yield('css')
</head>

<body id="page-top">

    <!-- Header -->
    {{-- @include('layouts.navbar') --}}
    <!-- Close Header -->

    @yield('content')

    <!-- Start Footer -->
    {{-- @include('layouts.footer') --}}
    <!-- End Footer -->

    <!-- Start Script -->
    @include('layouts.js')
    @yield('js')
    <!-- End Script -->
</body>
