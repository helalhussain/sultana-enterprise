@include('layouts.frontend.partials.style')

    <!-- Begin page -->


   {{-- @include('layouts.frontend.partials.sidebar') --}}

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

@yield('content')

@include('layouts.frontend.partials.footer')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    {{-- <div class="rightbar-overlay"></div> --}}

@include('layouts.frontend.partials.script')
