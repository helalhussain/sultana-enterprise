

 @extends('layouts.frontend.app')

@section('content')


@include('layouts.frontend.partials.header')
{{-- @include('layouts.frontend.partials.topnav') --}}
  <main class="main">

@include('layouts.frontend.partials.hero')

        <!-- Clients Section -->
        {{-- <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row g-0 clients-wrap">

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-1.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-2.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-3.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-4.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-5.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-6.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-7.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-3 col-md-4 client-logo">
                  <img src="{{ asset('frontend') }}/assets/img/clients/client-8.png" class="client-img-fluid" alt="">
                </div><!-- End Client Item -->

              </div>

            </div>

          </section><!-- /Clients Section --> --}}

    <!-- Featured Services Section -->

@include('layouts.frontend.partials.about')
    <!-- Why Us Section -->
    {{-- <section id="why-us" class="why-us section">

      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="600">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Why Us Section --> --}}

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend') }}/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->


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

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <a href="{{ asset('frontend') }}/assets/img/gallery/mse.jpeg"
                style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="{{ asset('frontend') }}/assets/img/gallery/mse.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                  {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse2.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse2.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse4.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse4.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse7.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse7.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse5.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse5.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mes-owner.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mes-owner.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse8.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse8.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
         

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <a href="{{ asset('frontend') }}/assets/img/gallery/mse5.jpeg"
                  style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="{{ asset('frontend') }}/assets/img/gallery/mse5.jpeg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="#" title="More Details">Sultana Enterprice</a></h4>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

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
   <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
    <div class="member shadow-lg">
      <img src="{{ uploaded_file($staff->image) }}" style="height: 230px" class="img-fluid img-thumbnai" alt="">
      <div class="member-content">
        <h4>{{ $staff->name }}</h4>
        <h5>{{ $staff->designation }}</h5>
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
