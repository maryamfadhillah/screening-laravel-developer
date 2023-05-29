@section('title', 'Interaktif Digital Worksheet')
@extends('layout')
@section('content')

    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-14 pt-md-10 pb-md-12 text-center">
            <div class="row">
                <div class="col-md-11 col-lg-7 col-xl-8 mx-auto">
                    <h3 class="mb-3">Toko Perawatan dan Perlengkapan Kucing</h3>
                    <h1 class="display-1 mb-3">Miaw</h1>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container pt-14 mt-14 py-md-16 pb-md-8">
            <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17 d-flex justify-content-center">

                @foreach ($service as $service)
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg card-border-bottom border-soft-blue">
                            <div class="card-body">
                                <img class="img-fluid" style="width: 500px" src="{{ asset('/' . $service->image) }}">
                                <h4 class="mt-2">{{ $service->title }}</h4>
                                <p class="mb-2">{{ $service->desc }}</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container">
            <div class="row mb-10">
                <div class="col-xl-4">
                    <h2 class="display-4 mt-10 mb-3">Our Community</h2>
                    <p class="lead fs-lg mb-6">Customer satisfaction is our major goal. See what our clients are saying
                        about our services.</p>
                </div>
                <!-- /column -->
                <div class="col-xl-8">
                    <div class="position-relative">
                        <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                            style="top: -0.7rem; right: -1.7rem;"></div>
                        <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1"
                            style="bottom: -0.5rem; left: -1.4rem;"></div>
                        <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-md="2"
                            data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($testimonial as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <div class="card">
                                                <div class="card-body">
                                                    <blockquote class="icon mb-0">
                                                        <p>{{ $testimonial->desc }}</p>
                                                        <div class="blockquote-details">
                                                            <div class="info">
                                                                <h5 class="mb-1">{{ $testimonial->name }}</h5>
                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                    <!--/.swiper-slide -->
                                    @endforeach


                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!-- /.position-relative -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
