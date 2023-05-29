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
          <h2 class="mb-5">Features</h2>
          <div class="card">
            <div class="card-body">
              
              <a href="{{ route('admin.features.create') }}" class="btn btn-primary">New</a>
              <div class="classic-view">
                <div class="table-responsive">
                  <table id="example" class="table" style="width:100%">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 0;
                      @endphp
                      @foreach ($feature as $feature)
                      @php
                          $no++;
                      @endphp
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $feature->title }}</td>
                        <td>{{ $feature->desc }}</td>
                        <td><a class="btn btn-danger" href="{{ route('admin.features.destroy', $feature->id) }}">Hapus</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

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