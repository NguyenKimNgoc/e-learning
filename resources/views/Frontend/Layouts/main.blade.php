<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Admin Template">
        <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
        <title>@yield('title')</title>
        <!-- Vendor styles-->
        <!-- build:css(../app) css/vendor.css-->
        <!-- Animate.CSS-->
        @include('Frontend/Layouts/css')
        @yield('addStylesheet')
    </head>
     @include('Frontend/Layouts/header')
    <body>
        @yield('content')
    <!--end settings template-->
    <!--Todo: include Frontend/Layouts/setting-->
    <!-- End Settings template-->
    @include('Frontend/Layouts/footer')
    @include('Frontend/Layouts/script')
    @yield('addScript')

    </body>
</html>