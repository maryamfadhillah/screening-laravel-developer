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
          <h2 class="mb-5">Service</h2>
          <div class="card">
            <div class="card-body">
              
              <a href="{{ route('admin.service.create') }}" class="btn btn-primary">New</a>
              <div class="classic-view">
                <div class="table-responsive">
                  <table id="example" class="table" style="width:100%">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 0;
                      @endphp
                      @foreach ($service as $service)
                      @php
                          $no++;
                      @endphp
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->desc }}</td>
                        <td>{{ $service->image }}</td>
                        <td><a class="btn btn-info" href="{{ route('admin.service.show', $service->id) }}">Lihat</a></td>
                        <td>
                        <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
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