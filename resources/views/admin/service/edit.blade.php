@extends('layouts.admin.app')

@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="service" page_name="Edit service">
        <a href="{{ route('admin.service.index') }}" class="btn btn-success">service</a>
    </x-admin.page-title>
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Add service</h4>
                            <p class="card-title-desc"></p>

                            <form id="" action="{{ route('admin.service.update',$service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">

                                    <x-admin.form-group label="name" :value="$service->name" class="mb-3"  placeholder="Enter service name"
                                        column="col-lg-6" required /><br />

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">নাম <span
                                                    class="text-danger"></span></label>
                                            <input type="text" value="{{ $service->name_bn }}" name="name_bn" class="form-control"
                                                placeholder="ইন্টার সেবা নাম">
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>



                                    <x-admin.form-group label="logo" for="image" class="mb-3" :required="false"
                                        type="file" data-show-image="show_service_image" column="col-lg-12" />

                                        <label for="" class="form-label">About<span class="text-danger">*</span></label>

                                    <textarea class="form-control" name="about" rows="5" placeholder="Type here" required>
                                        {!! $service->about !!}

                                    </textarea>
                                    <br />
                                    <label for="" class="form-label">Description<span
                                            class="text-danger">*</span></label>

                                    <textarea class="form-control your_summernote" name="description" rows="5" placeholder="Type here" required>
                                        {!! $service->description !!}
                                    </textarea>
                                    <label for="" class="form-label">বর্ণনা<span
                                            class="text-danger">*</span></label>
                                    <br />
                                    <textarea class="form-control your_summernote" name="description_bn" rows="5" placeholder="Type here">
                                        {!! $service->description_bn !!}
                                    </textarea>
                                    <br />
                                  <x-admin.form-group label="imageone" for="imageone" class="mb-3" :required="false"
                                        type="file" data-show-image="show_service_image" column="col-lg-3" />
                                    <x-admin.form-group label="imagetwo" for="imagetwo" class="mb-3" :required="false"
                                        type="file" data-show-image="show_service_image" column="col-lg-3" />
                                    <x-admin.form-group label="imagethree" for="imagethree" class="mb-3" :required="false"
                                        type="file" data-show-image="show_service_image" column="col-lg-3" />
                                    <x-admin.form-group label="imagefour" for="imagefour" class="mb-3" :required="false"
                                        type="file" data-show-image="show_service_image" column="col-lg-3" />

                                </div><br>
                                <x-admin.submit-button :text="isset($service) ? 'Update' : 'Submit'" />
                                <a href="{{ route('admin.service.index') }}" class="btn btn-secondary waves-effect">
                                    Cancel
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div> <!-- container-fluid -->
@endsection
