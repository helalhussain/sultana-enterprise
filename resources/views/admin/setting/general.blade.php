@extends('layouts.admin.app')
@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="Setting" page_name="General setting">
    </x-admin.page-title>

    <x-admin.page title="General Setting">

        <div class="row">
            <div class="col-lg-12">

                <form id="submit" action="{{ route('admin.setting.setting') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <x-admin.form-group label="site_name" value="{{ $setting->site_name }}" column="col-lg-6"
                            required />

                        <x-admin.form-group label="email" value="{{ $setting->email }}" class="mb-3"
                            placeholder="Enter email" column="col-lg-6" required /><br />

                        <x-admin.form-group label="address" value="{{ $setting->address }}" class="mb-3"
                            placeholder="Enter  address" column="col-lg-6" required /><br />

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">ঠিকানা <span style="text-danger">
                                        *</span></label>
                                <input type="text" name="address_bn" class="form-control"
                                    value="{{ $setting->address_bn }}" placeholder="ইন্টার ঠিকানা" required />
                                <span class="text-danger"></span>
                            </div>
                        </div>

                        <x-admin.form-group label="contact_no" value="{{ $setting->contact_no }}" class="mb-3"
                            placeholder="Enter the contact" column="col-lg-6" required /><br />
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">যোগাযোগ নম্বর<span style="text-danger">
                                        *</span></label>
                                <input type="text" name="contact_no_bn" value="{{ $setting->contact_no_bn }}"
                                    class="form-control" placeholder="ইন্টার যোগাযোগ এর নম্বর" required />
                                <span class="text-danger"></span>
                            </div>
                        </div>


                    </div>
                    <div class="col-12">

                        <button type="submit" class="btn btn-dark">Update</button>
                    </div>

                </form>

            </div>
        </div>
        <!-- end row -->
    </x-admin.page>
@endsection
