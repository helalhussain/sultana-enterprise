@extends('layouts.admin.app')

@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="Staff" page_name="Add staff">
        <a href="{{ route('admin.staff.index') }}" class="btn btn-success">Staff</a>
    </x-admin.page-title>
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Add Staff</h4>
                            <p class="card-title-desc"></p>

                            <form id="" action="{{ route('admin.staff.update',$staff->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">

                                    <x-admin.form-group label="name"  value="{{ $staff->name }}" class="mb-3" placeholder="Enter staff name"
                                        column="col-lg-6" required /><br />

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">নাম <span class="text-danger">*</span></label>
                                            <input type="text" name="name_bn" value="{{ $staff->name_bn }}" class="form-control"  placeholder="ইন্টার স্টাফ নাম" required>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
{{--
                                    <x-admin.form-group label="email" value="{{ $staff->email }}" class="mb-3" placeholder="Enter staff email"
                                        column="col-lg-4" /><br/> --}}



                                    <x-admin.form-group label="designation" value="{{ $staff->designation }}" class="mb-3" placeholder="Enter staff designation"
                                         column="col-lg-6"  required/><br />
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">পদবী <span class="text-danger"> *</span></label>
                                                <input type="text" name="designation_bn" value="{{ $staff->designation_bn }}" class="form-control"  placeholder="ইন্টার পদবী" required/>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>


                                        <x-admin.form-group label="gender" class="mb-3" :required="false" isType="select"
                                        class="" column="col-lg-6" required>
                                        <option
                                        value="{{ $staff->gender ? $staff->gender : '' }}">
                                        {{ $staff->gender ? $staff->gender : 'Select gender' }}
                                    </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </x-admin.form-group>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="" class="form-label">লিঙ্গ <span class="text-danger">*</span></label>
                                            <select type="text" name="gender_bn" class="form-control" required>
                                                <option value="{{ $staff->gender_bn ? $staff->gender_bn : '' }}">
                                                    {{ $staff->gender_bn ? $staff->gender_bn : 'লিঙ্গ নির্বাচন করুন' }}
                                                <option value="পুরুষ">পুরুষ</option>
                                                <option value="নারী">নারী</option>

                                            </select>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>

                                    <x-admin.form-group label="image" for="image" class="mb-3" :required="false"
                                    type="file" data-show-image="show_staff_image" column="col-lg-4"
                                     />


                                </div><br>
                                <x-admin.submit-button :text="isset($staff) ? 'Update' : 'Submit'" />
                                <a href="{{ route('admin.staff.index') }}" class="btn btn-secondary waves-effect">
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
