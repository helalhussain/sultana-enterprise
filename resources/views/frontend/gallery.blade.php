@extends('layouts.frontend.app')

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')


        <x-frontend.page page_title="About us" home="HOME" title="About us">

            <x-frontend.top-section title="About us" />
            <div class="row">

                    <div>
                        <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                            to the user with the option to either log out, or stay connected. If
                            "Logout" button is selected, the page is redirected to a logout URL.
                            If "Stay Connected" is selected the dialog closes and the session is
                            kept alive. If no option is selected after another set amount of
                            idle time, the page is automatically redirected to a set timeout
                            URL.</p>

                        <p>
                            Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.
                        </p>

                        <p class="mb-0">
                            As long as the user is active, the (optional) keep-alive URL keeps
                            getting pinged and the session stays alive. If you have no need to
                            keep the server-side session alive via the keep-alive URL, you can
                            also use this plugin as a simple lock mechanism that redirects to
                            your lock-session or log-out URL after a set amount of idle time.
                        </p>
                    </div>


            </div>
        </x-frontend.page>

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
@endsection




{{-- @extends('layouts.frontend.app')

@section('content')
     <!-- Begin page -->
     <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')



            <div class="main-content">

                <div class="page-content">

                    <x-frontend.page-title page_title="Gallery" home="HOME" title="Gallery">

                    </x-frontend.page-title>



                    <div class="container-fluid">
                        <div class="page-content-wrapper">

                            <div class="notice">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h1 class="text-center py-4 text-success text-uppercase fw-bold">Gallery</h1>

                                            </div>

                                            <div class="about-us">
                                                <div>
                                                    <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                                                        to the user with the option to either log out, or stay connected. If
                                                        "Logout" button is selected, the page is redirected to a logout URL.
                                                        If "Stay Connected" is selected the dialog closes and the session is
                                                        kept alive. If no option is selected after another set amount of
                                                        idle time, the page is automatically redirected to a set timeout
                                                        URL.</p>

                                                    <p>
                                                        Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.
                                                    </p>

                                                    <p class="mb-0">
                                                        As long as the user is active, the (optional) keep-alive URL keeps
                                                        getting pinged and the session stays alive. If you have no need to
                                                        keep the server-side session alive via the keep-alive URL, you can
                                                        also use this plugin as a simple lock mechanism that redirects to
                                                        your lock-session or log-out URL after a set amount of idle time.
                                                    </p>
                                                </div>
                                            </div><!---ENd about-us--->

                                        </div>
                                    </div>

                            </div><!--End notice-->

                        </div>


                    </div> <!-- container-fluid -->


                </div>
                <!-- End Page-content -->


                 </div>
            <!-- end page content-->


        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>



@endsection --}}
