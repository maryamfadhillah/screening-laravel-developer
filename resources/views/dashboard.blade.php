@section('title', 'Dashboard')
@extends('layout')
@section('content')  

<div class="container">
    <div class="row">
      <aside class="col-xl-2 sidebar doc-sidebar mt-md-0 py-5 d-none d-xl-block">
        <div class="widget pb-3">
          <nav id="collapse-usage">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
              <li><a href="../docs/index.html" class="active">Dashboard</a></li>
              <li><a href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
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
          <h2 class="mb-5">Dashboard</h2>
          <div class="card">
            <div class="card-body">
              <p>This guide will help you get started with Sandbox. All the information regarding file structure, build tools, components, credits, license and FAQ can be found here.</p>
              <p>If you have any questions that are beyond the scope of this help documentation, please feel free to contact us with the links below and please don't forget to provide your website URL.</p>
              <a href="https://1.envato.market/VKeok" class="btn btn-primary rounded-pill me-2" target="_blank">Contact Form</a>
              <a href="https://1.envato.market/ZdVOOX" class="btn btn-soft-primary rounded-pill" target="_blank">Discussions Page</a>
              <div class="card bg-soft-blue shadow-lg card-border-start border-soft-blue text-navy mt-10">
                <div class="card-body">
                  <p><strong>Please remember...</strong></p>
                  <ul class="unordered-list mb-0">
                    <li>Requests sent during weekends or on holidays will be replied on business days.</li>
                    <li>We only provide support for the issues related to the features that are included in the template. Debugging or providing guides on how to make custom modifications are not part of our support. Thank you for understanding.</li>
                  </ul>
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