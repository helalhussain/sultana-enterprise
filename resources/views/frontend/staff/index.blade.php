@extends('layouts.frontend.app')

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content bg-white">
            <div class="page-content">

                <br><br>
                <br><br>

                <div class="container-fluid">
                    <div class="page-content-wrapper">
                        <div class="top-section">
                                <div class="row">
                                    <x-frontend.top-section title="All Staff" />


                                    @foreach ($staffs as $staff)
                                    <div class="col-md-6 col-sm-12 col-lg-6 col-12 col-xl-3">

                                        <div class="card border px-2 pt-2" style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15)!important;">
                                            @if ($staff->image == null)
                                                <img class="card-img-top img-thumbnai img-fluid" src="{{ asset('images/defult/user.png') }}"
                                                    style="height:260px" alt="Card image cap">
                                            @else
                                                <img class="card-img-top img-thumbnai img-fluid" src="{{ uploaded_file($staff->image) }}"
                                                    style="height:260px" alt="Card image cap">
                                            @endif

                                            <div class="card-body px-1">
                                                <h4 class="card-title font-size-17 fw-bold mt-0">{{ $staff->name }}</h4>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Designation :
                                                    </strong>{{ $staff->designation }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Qualification :
                                                    </strong>{{ $staff->qualification }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Contact No :
                                                    </strong>{{ $staff->contact_no }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Email : </strong>{{ $staff->email }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Address : </strong>{{ $staff->address }},
                                                    {{ $staff->district }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Gender : </strong>{{ $staff->gender }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Blood Group :
                                                    </strong>{{ $staff->blood_group }}</h5>
                                                <h5 class="card-title font-size-14 mt-0"><strong>Joining Date :
                                                    </strong>{{ $staff->joining_date }}</h5>

                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                                        {{-- {!! $members->links() !!} --}}

                                </div>
                        </div><!--End top-secton-->
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
@endsection



{{--
@extends('layouts.frontend.app')

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')


        <x-frontend.page page_title="STAFF" home="HOME" title="Staff">

            <x-frontend.top-section title="All Staff" />
            <div class="row">
                @foreach ($staffs as $staff)
                    <div class="col-md-6 col-sm-12 col-lg-6 col-12 col-xl-3">

                        <div class="card border px-2 pt-2">
                            @if ($staff->image == null)
                                <img class="card-img-top img-thumbnai img-fluid" src="{{ asset('images/defult/user.png') }}"
                                    style="height:260px" alt="Card image cap">
                            @else
                                <img class="card-img-top img-thumbnai img-fluid" src="{{ uploaded_file($staff->image) }}"
                                    style="height:260px" alt="Card image cap">
                            @endif

                            <div class="card-body px-1">
                                <h4 class="card-title font-size-17 fw-bold mt-0">{{ $staff->name }}</h4>
                                <h5 class="card-title font-size-14 mt-0"><strong>Designation :
                                    </strong>{{ $staff->designation }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Qualification :
                                    </strong>{{ $staff->qualification }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Contact No :
                                    </strong>{{ $staff->contact_no }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Email : </strong>{{ $staff->email }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Address : </strong>{{ $staff->address }},
                                    {{ $staff->district }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Gender : </strong>{{ $staff->gender }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Blood Group :
                                    </strong>{{ $staff->blood_group }}</h5>
                                <h5 class="card-title font-size-14 mt-0"><strong>Joining Date :
                                    </strong>{{ $staff->joining_date }}</h5>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </x-frontend.page>

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
@endsection --}}
