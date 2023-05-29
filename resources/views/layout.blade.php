<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/grape.css') }}">
    <link rel="preload" href="{{ asset('assets/css/fonts/urbanist.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.touch-punch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/convertPointFromPageToNode.js') }}"></script>

    @stack('styles')

</head>


<body>
    <div class="content-wrapper">
        <header class="wrapper">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light caret-none" style="height: 80px">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <h1>MIAW</h1>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('homepage') }}">Homepage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Testimonials</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            @if (Auth::check())
                                <li class="nav-item dropdown language-select text-uppercase">
                                    <a class="btn btn-primary rounded-pill dropdown-item dropdown-toggle" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="uil uil-user pe-1"></i>{{ Auth::user()->username }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->

        {{-- content here --}}
        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container pb-10 pb-md-10">
            <div class="col-md col-lg-5">
                <a href="">Maryam Fadhillah - Screening Laravel Developer</a>
            </div>
        </div>
        <!--/.row -->
        </div>
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @stack('scripts')
</body>

</html>
