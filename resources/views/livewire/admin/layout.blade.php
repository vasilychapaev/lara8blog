<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title', 'adminka')</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <style>
        [x-cloak] { display: none; }
    </style>

    @livewireStyles
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{ env('APP_NAME') }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('bootstrap.admin.dashboard') }}">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    {{--<li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>--}}
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Posts</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.admin.posts.list') }}">
                            <span data-feather="file-text"></span>
                            List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.admin.post.add') }}">
                            <span data-feather="file-text"></span>
                            Create
                        </a>
                    </li>
                </ul>


                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Categories</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.admin.categories.list') }}">
                            <span data-feather="file-text"></span>
                            List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{--{{ route('lw.admin.category.add') }}--}}">
                            <span data-feather="file-text"></span>
                            Create
                        </a>
                    </li>
                </ul>


                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Tags</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.admin.tags.list') }}">
                            <span data-feather="file-text"></span>
                            List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.admin.tag.add') }}">
                            <span data-feather="file-text"></span>
                            Create
                        </a>
                    </li>
                </ul>


                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>BLOG</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.blog.category.main') }}">
                            <span data-feather="file-text"></span>
                            Main
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.blog.category.main') }}">
                            <span data-feather="file-text"></span>
                            Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lw.blog.category.main') }}">
                            <span data-feather="file-text"></span>
                            Category
                        </a>
                    </li>
                </ul>



            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">@yield('title', 'adminka')</h1>
                {{--<div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>--}}
            </div>


            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif


{{--            @yield('content')--}}
            {{ $slot }}

        </main>
    </div>
</div>


<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" crossorigin="anonymous"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous"></script>--}}
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

{{--<script src="{{ asset('assets/js/dashboard.js') }}"></script>--}}
@livewireScripts
@stack('footerJs')

<script>
    window.livewire.on('toggleModelView', event => {
        // if (event.action == 'showModal') {
            $(event.classModalView).modal('toggle');
        // }
    });

</script>

</body>
</html>
