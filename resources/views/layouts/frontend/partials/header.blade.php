<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center accent-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><span >{{ $setting->email }}</span></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $setting->contact_no }}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}

        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home.page') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ uploaded_file($logoIcon->logo) }}" alt="">
          {{-- <h1 class="sitename">Green</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            {{-- <a href="#">{{ __('translate.documentation') }}</a> --}}
            <li><a href="{{ route('home.page') }}" class="active">{{ __('header.home') }}</a></li>
            <li><a href="{{ route('about.index') }}">{{ __('header.aboutus') }}</a></li>
            {{-- <li><a href="#services">{{ __('header.services') }}</a></li> --}}

            {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> --}}
            <li><a href="{{ route('contact.index') }}">{{ __('header.contactus') }}</a></li>
            <li>
                <select name="" class="form-control top-selector language_switcher">
                    <option>{{ Config::get('languages')[App::getLocale()] }}</option>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                               <option value="{{ $lang }}"> <a class="dropdown-item" href="#"> {{$language}}</a> </option>
                        @endif
                    @endforeach
                </select>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript">
  $("body").on("change", ".language_switcher", function(event) {
      event.preventDefault();
      var lang = $(this).val();
      var url = "{{ route('lang.switch', ':lang') }}",
      url = url.replace(':lang', lang)
      $.ajax({
          type: "GET",
          url: url,
          data: {
              lang: lang,
          },
          success: function() {
              window.location.reload();
          },
          error: function() {
              window.location.reload();
          }
      });
  });
  </script>
