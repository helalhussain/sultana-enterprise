

@extends('layouts.frontend.app')

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.frontend.partials.header')
        @include('layouts.frontend.partials.topnav')


        <x-frontend.page page_title="Notice" home="HOME" title="Notice">

            <x-frontend.top-section title="All Notice" />
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered border-success mb-0" style="width:100%">
                        <thead>
                            <tr>
                                <th colspan="1">S.N.</th>
                                <th colspan="5">Title</th>
                                <th colspan="2">Date</th>
                                <th colspan="2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $key => $notice)
                                <tr>
                                    <td class="font-size-16" colspan="1" style="color:black">{{ $key + 1 }}</td>
                                    <td class="font-size-16" colspan="5" style="color:black">{{ $notice->title }}</td>
                                    <td class="font-size-16" colspan="2" style="color:black">{{ $notice->created_at }}</td>
                                    <td class="font-size-16" colspan="2" style="color:black">
                                        <a href="{{ route('notice.show',$notice->id) }}" class="btn text-white btn-sm waves-effect waves-light"
                                            style="background-color:#1D8939">
                                            Details</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </x-frontend.page>

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
@endsection

