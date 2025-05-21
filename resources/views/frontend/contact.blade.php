

@extends('layouts.frontend.app')

@section('content')


@include('layouts.frontend.partials.header')
{{-- @include('layouts.frontend.partials.topnav') --}}
  <main class="main">


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('contact.contactus') }}</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
                              <!----Business hourse---->
              <div>
                <div class="container hours-card">
  {{-- <div class="card shadow"> --}}
    <div class="card-header bg text-white text-center" style="background:#211689">
      <h4 class="text-white pt-2 pb-2">Business Hours</h4>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item d-flex justify-content-between">
        {{-- <span>Monday <br><small class="special-note">(Buddha Purnima – hours may vary)</small></span> --}}
        {{-- <span>9:00 AM – 7:00 PM</span> --}}
      </li>
        <li class="list-group-item d-flex justify-content-between">
        <span>Monday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Tuesday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Wednesday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Thursday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Friday</span>
        <span class="closed">Closed</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Saturday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Sunday</span>
        <span>9:00 AM – 7:00 PM</span>
      </li>
    </ul>
  {{-- </div> --}}
</div>
              </div>

              <!----End business hourse----->
              <br/><br/>
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>{{ __('contact.address') }}</h3>
                  <p>{{ $setting->address }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>{{ __('contact.phone') }}</h3>
                  <p>{{ $setting->contact_no }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>{{ __('contact.email') }}</h3>
                  <p>{{ $setting->email }}</p>
                </div>
              </div><!-- End Info Item -->



            </div>
          </div>

          <div class="col-lg-7">
               <div class="info-wrap ">
                <div class="card-header bg mb-3 text-white text-center" style="background:#211689">
      <h4 class="text-white pt-2 pb-2 ">Send Message</h4>
    </div>
            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">{{ __('contact.your_name') }}</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">{{ __('contact.your_email') }}</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">{{ __('contact.subject') }}</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">{{ __('contact.message') }}</label>
                  <textarea class="form-control" name="description" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">

                  {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                  <button class="btn text-white" style="background-color:#211689" type="submit">Send Message</button>
                </div>

              </div>
            </form>
            <br/>
            <br/>
               </div>
          </div><!-- End Contact Form -->

        </div>

<div class="row">
         <div class="col-lg-12">
            <div class="card info-wrap mt-5">


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181.06539203109097!2d91.41142420268991!3d24.939738629623655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750df000b952df9%3A0xae6e29a9b68a1b20!2sSultana%20Enterprise!5e1!3m2!1sen!2sbd!4v1747660351223!5m2!1sen!2sbd"
 frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
        </div>
</div>

      </div>

    </section><!-- /Contact Section -->

  </main>



  @endsection

