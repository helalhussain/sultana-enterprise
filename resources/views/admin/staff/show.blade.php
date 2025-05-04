@extends('layouts.admin.app')

@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="staff" page_name="Show staff">
        <a href="{{ route('admin.staff.index') }}" class="btn btn-success">All Staff</a>
    </x-admin.page-title>
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <!--Cardstart-->
                    <div class="card mb-4">
                        <div class="container">
                            <div class="main-body">

                                <div class="row gutters-sm mt-4">
                                    <div class="col-md-3 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="{{ uploaded_file($staff->image) }}" alt=""
                                                        class="rounded-circle img-thumbnail" width="150"
                                                        style="height:150px">
                                                    <div class="mt-3">
                                                        <h4> {{ $staff->name }}</h4>
                                                        <p class="text-secondary mb-1"> {{ $staff->email }}</p>
                                                        <p class="text-muted font-size-sm">
                                                        <a href="{{ route('admin.staff.edit',$staff->id) }}" class="btn btn-success">Edit</a>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<div class="col-md-9">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="cards mb-3 g-0">
                <div class="card-body">
<x-admin.item item_name="Name" item="{{ $staff->name }}"/>
<x-admin.item item_name="Designation" item="{{  $staff->designation }}"/>

<x-admin.item item_name="Gender" item="{{  $staff->gender }}"/>

                </div>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="cards mb-3 g-0">
                <div class="card-body">
                    <x-admin.item item_name="Name" item="{{ $staff->name_bn }}"/>
                        <x-admin.item item_name="Designation" item="{{  $staff->designation_bn }}"/>
                       <x-admin.item item_name="Gender" item="{{  $staff->gender_bn }}"/>


                </div>
            </div>
        </div>
    </div>
</div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->


                    </div>

                </div> <!-- container-fluid -->

            @endsection
