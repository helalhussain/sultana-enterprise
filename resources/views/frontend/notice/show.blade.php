@extends('layouts.frontend.app')

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')


        <x-frontend.page page_title="Notice" home="HOME" title="Notice">

            <x-frontend.top-section title="Details" />
            <div class="row">
                <div class="col-sm-12 col-md-8 mb-5">
                    <h4 class="notice-title">
                        {{ $notice->title }}</h4>
                    <div class="meta-date mb-3">
                        Publication Date : {{ $notice->created_at }}
                    </div>

                    @if($notice->file != "")

                                <h5 class="email-attachment-title mb-2">File</h5>
                                <div class="cursor-pointer">
                                    {{-- <i class="ti ti-file"></i> --}}

                                        <a href="{{ uploaded_file($notice->file) }}" class="btn btn-light border border-secondary btn-rounded">
                                            Download <i class="mdi mdi-download ms-2"></i>

                                        </a>

                                    {{-- <a
                                        href="{{ uploaded_file($notice->file) }}"
                                        download
                                        class="align-middle ms-1">

                                        <p class="btn btn-light border border-secondary border-1 rounded-pill" >Download <i class="mdi mdi-download ms-2"></i></p>
                                    </a> --}}

                                </div>



                            </div>

                @endif
{{--
                    <a href="https://www.sylhetbar.com.bd/uploads/images/bill/47" class="mb-4 d-block">
                        <div class="bill-attachment">
                            <img src="https://www.sylhetbar.com.bd/uploads/images/avatar/avatar_attachment.png" class="attachment-logo">
                            <p>Download Attachment</p>
                        </div>
                    </a> --}}
                    <style>
                        .single-bill-content p {
                            word-break: break-word;
                        }
                    </style>

                </div>

            </div>
        </x-frontend.page>

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
@endsection

