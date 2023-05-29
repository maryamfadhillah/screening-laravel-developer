@section('title', 'Testimonial')
@extends('layout')
@section('content')  

<div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-5 d-none d-xl-block">
        <div class="widget pb-3">
          <nav id="collapse-usage">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
              <li><a href="../docs/index.html">Dashboard</a></li>
              <li><a href="../docs/index.html" class="active">Testimonial</a></li>
              <li><a href="../docs/faq.html">Post</a></li>
              <li><a href="../docs/forms.html">Teams</a></li>
              <li><a href="../docs/changelog.html">Contact</a></li>
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
                  <h1 class="display-1 mb-3">Testimonial</h1>
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
                                <div class="col-3">
                                  <span class="avatar bg-pale-primary text-primary w-12 h-12">
                                    <span><i class="uil uil-user"></i></span>
                                  </span>
                                </div>
                                <div class="col">
                                  <p class="my-0">Nama Pelanggan</p>
                                  <h5 class="text-grape"><strong>{{ $testimonial->name }}</strong></h5>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md my-2">
                              <p class="my-0">{{ $testimonial->desc }}</p> 
                              <h5><strong>oke</strong></h5>
                            </div>
                          </div>
          
                          <hr class="my-6"/>
          
          
                          <a class="btn btn-warning rounded-pill" href="{{ route('admin.testimonial.edit', $testimonial->id)}}">Edit</a>
                          <a class="btn btn-purple rounded-pill" href="{{ route('admin.testimonial.index')}}">Kembali</a>
          
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