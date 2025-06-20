

 @extends('layouts.frontend.app')

@section('content')


@include('layouts.frontend.partials.header')
{{-- @include('layouts.frontend.partials.topnav') --}}
  <main class="main">


   <!-- Services Section -->
   <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">

      {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row g-5">
  <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
 <h2>{{ $show->name }}</h2>
      {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->
    <!-- Images Grid -->
    <div class="mb-2 row g-3">
      <div class="col-md-3 col-sm-6">
        <img src="{{ uploaded_file($show->image_1) }}" class="rounded img-fluid" alt="Service Image 1">
      </div>
      <div class="col-md-3 col-sm-6">
        <img src="{{ uploaded_file($show->image_2) }}" class="rounded img-fluid" alt="Service Image 2">
      </div>
      <div class="col-md-3 col-sm-6">
        <img src="{{ uploaded_file($show->image_3) }}" class="rounded img-fluid" alt="Service Image 3">
      </div>
      <div class="col-md-3 col-sm-6">
        <img src="{{ uploaded_file($show->image_4) }}" class="rounded img-fluid" alt="Service Image 4">
      </div>
    </div>

    <!-- Description -->
    <div class="shadow-sm card">
      <div class="card-body">
        {{-- <h5 class="card-title">Service Description</h5> --}}
        <p class="card-text">
         {!! $show->description !!}
        </p>
      </div>
    </div>


      </div>

    </div>

  </section><!-- /Services Section -->









  </main>



  @endsection
