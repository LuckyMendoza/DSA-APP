<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>DSA</title>
    <!--links---->
    @include('home.partials.styles')
</head>

<body>
    <!-- Preloader Start -->
    @include('home.partials.preloader')
    <!-- Preloader End -->

    <!-- Header Start -->
    @include('home.partials.header')
    <!-- Header End -->
    

    <!-- Section Start -->
    <main>
        @yield('content')
    </main>
    <!-- Section End -->



    <!--footer-->
    @include('home.partials.footer')
    <!--footer end-->

    <!--scripts--->



    
    @include('home.partials.scripts')
    <!--scripts end--->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
    <!-- End Back to Top Button -->

</body>
</html>