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
        <section id="snippet-1" class="wrapper py-5">
          <h2 class="mb-5">New Service</h2>
          <div class="card">
            <div class="card-body">

              <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                
                <div class="form-floating mb-4">
                  <input id="textInputExample" type="text" class="form-control" placeholder="Title" name="title" required>
                  <label for="textInputExample">Title</label>
                </div>
  
                <div class="form-floating mb-4">
                  <input id="textInputExample" type="text" class="form-control" placeholder="Description" name="desc" required>
                  <label for="textInputExample">Description</label>
                </div>

                <div class="mb-4">
                    <label for="formFile" class="form-label text-dark">Upload Foto Layanan</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

                <button class="btn btn-primary rounded-pill" type="submit">Submit</button>

              </form>
            </div>
            <!-- /.card-body -->
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