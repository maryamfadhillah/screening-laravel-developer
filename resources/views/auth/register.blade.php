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
    <title>IDW - Registrasi Guru</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/aqua.css') }}">
    <link rel="preload" href="{{ asset('assets/css/fonts/urbanist.css') }}" as="style" onload="this.rel='stylesheet'">
</head>

<body>
    <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-8 py-md-8"
        data-image-src="{{ ('/img/photos/bg18.png') }}">
        <div class="container py-0 ">
            <div class="row">
                <div class="col-lg col-xl mx-auto">
                    <div class="col-lg-8 mx-auto mb-6">
                        <h1 class="display-1 mb-3">IDW</h1>
                        <a class="display-5 text-gradient gradient-7">Interaktif Digital Worksheet</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto ">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start">Registrasi Akun Guru</h2>
                            <p class="lead mb-6 text-start">Daftarkan username, password, dan kelas.</p>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                                <i class="uil uil-times-circle"></i>{{ $error }}</a>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endforeach
                            @endif
                            <form class="text-start mb-3 needs-validation" novalidate
                                action="{{ route('postRegistrasi') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" placeholder="Username" id="username"
                                        name="username" required>
                                    <label for="username">Username<span class="text-danger">*</span></label>
                                    <div class="invalid-feedback">
                                        Mohon masukkan username.
                                    </div>
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password" required>
                                    <label for="password">Password<span class="text-danger">*</span></label>
                                    <div class="invalid-feedback">
                                        Mohon masukkan password.
                                    </div>
                                </div>
                                <button class="btn btn-primary rounded-pill btn-login w-100 mb-2"
                                    type="submit">Registrasi</button>
                            </form>
                            <!-- /form -->
                            <p class="mb-1"><a href="{{ route('homepage') }}" class="">Kembali ke Homepage</a></p>
                            <!--/.social -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
</body>

</html>