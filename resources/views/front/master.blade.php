<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sheikh Salah Uddin - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('front.includes.css')
    @stack('css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
@include('front.includes.navbar')
<!-- Navbar End -->


@yield('body')


<!-- Copyright Start -->
@include('front.includes.footer')
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary default-bg-color btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


@include('front.includes.scripts')
</body>

</html>
