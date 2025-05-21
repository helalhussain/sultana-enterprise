@extends('layouts.admin.app')

@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="About" page_name=" About">
        {{-- <a href="{{ route('admin.staff.index') }}" class="btn btn-success">Staff</a> --}}
    </x-admin.page-title>
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Update About</h4>
                            <p class="card-title-desc"></p>

                            <form id="submit" action="{{ route('admin.about.update',$about_us->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- <div class="mb-3">
                                            <label for="" class="form-label">About Us <span class="text-danger">*</span></label>
                                            <textarea type="text" name="about_us" class="form-control"  required>
                                                {{ $about_us->about_us }}
                                            </textarea>
                                            <span class="text-danger"></span>
                                        </div> --}}
                                        <label for="" class="form-label">About Us <span class="text-danger">*</span></label>
                                        <br/>
                                    <textarea  class="form-control your_summernote" name="about_us" rows="5" placeholder="Type here">
                                        {!! $about_us->about_us !!}
                                    </textarea>
                                    <label for="" class="form-label">আমাদের সম্পর্কে <span class="text-danger">*</span></label>
                                    <br/>
                                    <textarea  class="form-control your_summernote" name="about_us_bn" rows="5" placeholder="Type here">
                                        {!! $about_us->about_us_bn !!}
                                    </textarea>
                                {{-- @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                                </div>
                                <x-admin.form-group
                                label="file"
                                type="file"
                                accept="" column="col-lg-6"

                            />
                                    </div>
                                    <br/>
                                      <x-admin.form-group label="name" :value="$about_us->name ?? ''" class="mb-3" placeholder="Enter owner name"
                                        column="col-lg-6" required /><br />

                               <div class="mb-3">
                                            <label for="" class="form-label">About Me(Owner) <span class="text-danger">*</span></label>
                                            <textarea type="text" name="about_owner" class="form-control"  required>
                                                {{ $about_us->about_owner }}
                                            </textarea>
                                            <span class="text-danger"></span>
                                        </div>






                                <br>
                                <x-admin.submit-button text="Update" class="w-10" />
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div> <!-- container-fluid -->
@endsection




{{-- @extends('layouts.admin.app')
@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="About" page_name="About">

    </x-admin.page-title>




    <x-admin.page title="General Setting">
        <form id="submit" action="{{ route('admin.setting.setting') }}">
            @csrf
            @method('PUT')
            <div class="row gy-3">
                <x-admin.form-group label="site_name" value="{{ $setting->site_name }}" column="col-lg-6" />

                <div class="col-12 mt-4">
                    <x-admin.submit-button text="Update" class="w-10" />
                </div>
            </div>
        </form>
    </x-admin.page>
@endsection --}}
