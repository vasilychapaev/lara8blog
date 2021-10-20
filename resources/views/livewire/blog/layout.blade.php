<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    <!-- Bootstrap core CSS -->
{{--    <link href="{{ asset('assets_sb/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets_sb/css/styles.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets_sb/favicon.ico') }}">
    @livewireStyles

</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('lw.blog.category.main') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
{{--                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>--}}
                <li class="nav-item"><a class="nav-link" href="{{ route('lw.blog.contact-form') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">{{ env('APP_NAME') }}</h1>
            <p class="lead mb-0">
                @yield('subtitle')
            </p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->

        {{ $slot }}


        <!-- Side widgets-->
        @include('bootstrap.blog.sidebar')
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets_sb/js/scripts.js') }}"></script>
@livewireScripts

</body>
</html>
