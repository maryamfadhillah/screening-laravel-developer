@section('title', 'Features')
@extends('layout')
@section('content')  

<div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-5 d-none d-xl-block">
        <div class="widget pb-3">
          <nav id="collapse-usage">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
              <li><a href="../docs/index.html">Dashboard</a></li>
              <li><a href="../docs/index.html" class="active">Features</a></li>
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
        <section id="snippet-1" class="wrapper py-5">
          <h2 class="mb-5">New Features</h2>
          <div class="card">
            <div class="card-body">

              <form action="{{ route('admin.features.store') }}" method="POST">
                @method('POST')
                @csrf
                
                <div class="form-floating mb-4">
                  <input id="textInputExample" type="text" class="form-control" placeholder="Title" name="title" required>
                  <label for="textInputExample">Title</label>
                </div>
  
                <div class="form-floating mb-4">
                  <textarea id="textInputExample" type="text" class="form-control" placeholder="Description" name="desc" style="height: 150px" required></textarea>
                  <label for="textInputExample">Description</label>
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