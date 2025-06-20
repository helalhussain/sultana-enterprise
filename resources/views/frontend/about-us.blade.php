
@extends('layouts.frontend.app')

@section('content')


@include('layouts.frontend.partials.header')
{{-- @include('layouts.frontend.partials.topnav') --}}
  <main class="main">


    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>ABOUT US</h2>
          {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-2">
            <div class="col-lg-12 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
              {{-- <img src="{{ uploaded_file($aboutus->image) }}" class="img-fluid img-thumbnail"
              style="width:100%"alt=""> --}}
              {{-- <button class="btn btn-success" >Learn More</button> --}}

            </div>
            <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
              {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}

                <p class="fst-italic">
                    {!! $aboutus->about_us !!}
                    {{-- {{ $aboutus->about_us }} --}}
                   </p>



            </div>
          </div>

        </div>

      </section><!-- /About Section -->


  {{-- @include('layouts.frontend.partials.about') --}}

  </main>



  @endsection
