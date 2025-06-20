

 @extends('layouts.frontend.app')

@section('content')


@include('layouts.frontend.partials.header')
{{-- @include('layouts.frontend.partials.topnav') --}}
  <main class="main">

@include('layouts.frontend.partials.hero')



@include('layouts.frontend.partials.about')


 @include('layouts.frontend.partials.item')


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">


          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

     @foreach ($galleries as $gallery)
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <a href="{{ uploaded_file($gallery->image) }}"
                style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="{{ uploaded_file($gallery->image) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">{{ $gallery->title }}</a></h4>
                  {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                </div>
              </div>
            </div><!-- End Portfolio Item -->

     @endforeach


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Staff</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">



   @foreach ($staffs as $staff)
   <div class="mx-auto col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
    <div class="shadow-lg member">
      <img src="{{ uploaded_file($staff->image) }}" style=" width:100%; margin: -1px -1px 22px -1px;" class="p-2 img-fluid img-thumbnai" alt="">
      <div class="member-content">
        <h4 class="">{{ $staff->name }}</h4>
        <h5 class="">{{ $staff->designation }}</h5>
        {{-- <p>
          Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
        </p> --}}
        {{-- <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div>
  </div><!-- End Team Member -->


   @endforeach

        </div>

      </div>

    </section><!-- /Team Section -->



  </main>



  @endsection
