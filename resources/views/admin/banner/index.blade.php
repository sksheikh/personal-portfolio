@extends('admin.master')

@section('title')
    Header
@endsection

@push('css')
    <style>
        .dropify-message p {
            font-size: 18px !important;
        }
    </style>
@endpush

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Banner Manage</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Header</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <span class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</span>
                    <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!--row start-->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <!--Start Background Image-->
                                <div class="form-group">
                                    <label class="form-label" for="bg_image">Background Image <span class="text-danger"><sub>*</sub></span></label>
                                    <div>
                                        <input id="bg_image" type="file" name="bg_image"
                                            class="dropify form-control mb-2"
                                            data-default-file="{{$banner->bg_image ? asset('upload/banner/'.$banner->bg_image) : asset('upload/banner/banner.jpg')}}"
                                            accept="image/*">

                                    </div>
                                </div>
                                <!--Start Background Image-->
                            </div>
                        </div>

                        <!--row start-->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <!--Start Profile Image-->
                                <div class="form-group mb-3">
                                    <label for="profile_image" class="form-label">Profile Image</label>
                                    <div>
                                        <input id="profile_image" type="file"
                                            name="profile_image"
                                            class="dropify form-control mb-2"
                                            data-default-file="{{$banner->profile_image ? asset('upload/banner/'.$banner->profile_image) : asset('upload/banner/profile.png')}}"
                                            accept="image/*">

                                    </div>
                                </div>
                                <!--Start Profile Image-->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="resume" class="form-label">Resume</label>
                                    <input id="resume" type="file"
                                        name="resume"
                                        class="dropify form-control"
                                        data-default-file="{{$banner->resume ? asset('upload/banner/'.$banner->resume) : asset('upload/banner/resume.pdf')}}"
                                        accept="application/pdf">
                                </div>
                            </div>
                        </div>

                        <!--row start-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="name" class="form-label"> Name</label>
                                    <input id="name" type="text"
                                        name="name"
                                        value="{{ $banner->name ?? ''}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="title">Title</label>
                                    <input id="title" type="text"
                                        name="title"
                                        value="{{ $banner->title ?? ''}}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--row start-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="github_link">Github Link</label>
                                    <input id="github_link" type="text"
                                        name="github_link"
                                        value="{{ $banner->github_link ?? '' }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group mb-2">
                                    <label for="linkedin_link">Linkedin Link</label>
                                    <input id="linkedin_link" type="text"
                                        name="linkedin_link"
                                        value="{{ $banner->linkedin_link ?? '' }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--row start-->
                        <div class="row my-4">
                            <div class="col-md-12 text-end">
                                <button type="submit"  class="btn btn-sm btn-primary ">
                                    <i class="fa fa-plus-circle"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
