   <!-- Services Section -->
   <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Items and Services</h2>
      {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row g-5">
@foreach ($services as $service)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-cyan position-relative">
            {{-- <i class="bi bi-activity icon"></i> --}}

            <img src="{{ uploaded_file($service->logo) }}" style="height: 260px" class="img-fluid" alt="">
            <h4 class="pt-3 text-bold">{{ $service->name }}</h4>
                <div id="content">
                    <p class="fst-italic" id="fullText">

                        {{ $service->about }}
                    </p>
                </div>
                <a class="btn btn-dark" href="{{ route('home.show.page',$service->id) }}">read more</a>
          </div>
        </div><!-- End Service Item -->

@endforeach



      </div>

    </div>

  </section><!-- /Services Section -->

