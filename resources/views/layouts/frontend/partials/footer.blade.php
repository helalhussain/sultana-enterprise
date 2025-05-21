<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            {{-- <span class="sitename">Green</span> --}}
            <img src="{{ uploaded_file($logoIcon->logo) }}" alt="">
          </a>
          <p>
            {{ __('footer.footer_about') }}</p>
          <div class="social-links d-flex mt-4">
            {{-- <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>{{ __('footer.page') }}</h4>
          <ul>
            <li><a href="{{ route('home.page') }}">{{ __('header.home') }}</a></li>
            <li><a href="{{ route('about.index') }}">{{ __('header.aboutus') }}</a></li>
            {{-- <li><a href="#">{{ __('header.services') }}</a></li> --}}
            <li><a href="{{ route('contact.index') }}">{{ __('header.contactus') }}</a></li>
            {{-- <li><a href="#">Privacy policy</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>{{ __('footer.items') }}</h4>
          <ul>
            <li><a href="#">{{ __('footer.wholesaler') }}</a></li>
            <li><a href="#">{{ __('footer.retail') }}</a></li>
            <li><a href="#">{{ __('footer.stone') }}</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>{{ __('footer.contactus') }}</h4>
          <p></p>
          {{-- <p>New York, NY 535022</p>
          <p>United States</p> --}}
          <p><strong>{{ __('footer.address') }}:</strong> <span>{{ $setting->address }}</span></p>
          <p><strong>{{ __('footer.phone') }}:</strong> <span>{{ $setting->contact_no }}</span></p>
          <p><strong>{{ __('footer.email') }}:</strong> <span>{{ $setting->email }}</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $setting->site_name }}</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Developed by <a href="https://helalhussain.pro/" class="text-light"><strong>Helal Hussain</strong></a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

