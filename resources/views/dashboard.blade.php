@section('title', 'Dashboard')
@extends('layout')
@section('content')  

<div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-5 d-none d-xl-block">
        <div class="widget pb-3">
          <nav id="collapse-usage">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
            <li><a href="{{ route('admin.dashboard') }}" class="active">Dashboard</a></li>
              <li><a href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
              <li><a href="{{ route('admin.service.index') }}">Service</a></li>
            </ul>
          </nav>
          <!-- /nav -->
        </div>
      </aside>
      <!-- /column -->
      <!-- /column -->
      <div class="col-xl-10 order-xl-2">
        <section id="snippet-1" class="wrapper py-5">
          <h2 class="mb-5">Dashboard</h2>
          <div class="card">
            <div class="card-body">
              <p>Halo, Selamat Datang.</p>
              <p>Pada website ini kamu dapat menambahkan Service dan Testimonial produk kamu untuk ditampilkan di Company Profile</p>
              <div class="card bg-soft-blue shadow-lg card-border-start border-soft-blue text-navy mt-10">
                <div class="card-body">
                  <p><strong>Lihat Portofolio Maryam lainnya...</strong></p>
                  <p>Ini adalah website portofolio yang dibuat untuk lamaran pekerjaan di PT Daya Rekadigital Indonesia sebagai Laravel Developer</p>
                  <a href="https://github.com/maryamfadhillah" class="btn btn-primary rounded-pill me-2" target="_blank">Github</a>
                  
                  {{-- <form class="py-3" action="{{ route('admin.token') }}" method="POST">
                    @method('POST')
                    @csrf
                    <button class="btn btn-secondary" type="submit">Generate Token</button>
                  </form> --}}
                  
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </section>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>

@endsection