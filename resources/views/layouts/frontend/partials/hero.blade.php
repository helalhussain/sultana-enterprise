    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

          {{-- <div class="carousel-item active">
            <img src="{{ asset('frontend') }}/{{ asset('frontend') }}/assets/img/hero-carousel/mse.jpeg" alt="">
            <div class="carousel-container">
              <h2>Welcome to Sultana Enterprice</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="{{ route('about.index') }}" class="btn-get-started">About Us</a>
            </div>
          </div><!-- End Carousel Item --> --}}
          <div class="carousel-item active">
            <img src="{{ asset('frontend') }}/assets/img/hero-carousel/event1.jpeg" alt="">
            <div class="carousel-container">
                <h2>Welcome to Sultana Enterprice</h2>
                 <p>We provide creative and elegant event decoration and management services, transforming your special occasions into unforgettable memories with customized themes, stylish designs, and professional execution.</p>

              <a href="{{ route('about.index') }}" class="btn-get-started">About Us</a>
            </div>
          </div><!-- End Carousel Item -->
          <div class="carousel-item">
            <img src="{{ asset('frontend') }}/assets/img/hero-carousel/mse.jpeg" alt="">
            <div class="carousel-container">
                <h2>Welcome to Sultana Enterprice</h2>
                            <p>We supply high-quality stone, sand, and bricks for construction projects, ensuring reliable delivery, competitive pricing, and excellent service to builders, contractors, and developers.</p>
              <a href="{{ route('about.index') }}" class="btn-get-started">About Us</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <img src="{{ asset('frontend') }}/assets/img/hero-carousel/mse7.jpeg" alt="">
            <div class="carousel-container">
                <h2>Welcome to Sultana Enterprice</h2>
              <p> Trusted supplier of premium stone, sand, and bricks for all construction needs. We deliver durable materials on time, helping you build strong foundations with confidence</p>
              <a href="{{ route('about.index') }}" class="btn-get-started">About Us</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </section><!-- /Hero Section -->
