@section('title', 'Service')
@extends('layout')
@section('content')  

<div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-5 d-none d-xl-block">
        <div class="widget pb-3">
          <nav id="collapse-usage">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
              <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li><a href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
              <li><a href="{{ route('admin.service.index') }}" class="active">Service</a></li>
            </ul>
          </nav>
          <!-- /nav -->
        </div>
      </aside>
      <!-- /column -->
      <!-- /column -->
      <div class="col-xl-10 order-xl-2">
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-10 pt-md-10 pb-md-10 text-center">
              <div class="row">
                <div class="col-md-11 col-lg-7 col-xl-8 mx-auto">
                  <h1 class="display-1 mb-3">Service</h1>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </section>
          <section class="wrapper bg-light">
            <div class="container py-10 py-md-12">
              <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg">
                  <div class="blog single">
                    <div class="card">
                      <div class="card-body">
                        <div class="classic-view">
                          <div class="row">
                            <div class="col-12 col-md-4 my-2">
                              <div class="row">
                                <div class="col">
                                  <p class="my-0">Title</p>
                                  <h5 class="text-grape"><strong>{{ $service->title }}</strong></h5>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md my-2">
                              <p class="my-0">{{ $service->desc }}</p> 
                              <h5><strong>oke</strong></h5>
                            </div>
                          </div>
          
                          <hr class="my-6"/>
          
          
                          <a class="btn btn-warning rounded-pill" href="{{ route('admin.service.edit', $service->id)}}">Edit</a>
                          <a class="btn btn-purple rounded-pill" href="{{ route('admin.service.index')}}">Kembali</a>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>

@endsection