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
        <section id="snippet-1" class="wrapper py-5">
          <h2 class="mb-5">Testimonial</h2>
          <div class="card">
            <div class="card-body">
              
              <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">New</a>
              <div class="classic-view">
                <div class="table-responsive">
                  <table id="example" class="table" style="width:100%">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 0;
                      @endphp
                      @foreach ($testimonial as $testimonial)
                      @php
                          $no++;
                      @endphp
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->desc }}</td>
                        <td><a class="btn btn-info" href="{{ route('admin.testimonial.show', $testimonial->id) }}">Lihat</a></td>
                        <td>
                        <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                            <button class="btn btn-danger" href="">Hapus</button>
                          </form>
                        </td>
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