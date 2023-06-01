@extends('admin.master')

@section('title')
    About
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
        <h1 class="mt-4">About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <form action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <!--Start Background Image-->
                                <div class="form-group mb-2">
                                    <label for="image" class="form-label">About Image</label>
                                    <div>
                                        <input id="image" type="file" name="image"
                                            class="form-control dropify mb-2 @error('image') is-invalid @enderror"
                                            data-default-file="{{ asset('upload/about/' . @$about->image) ?? '' }}"
                                            accept="image/*">
                                        @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>
                                <!--Start Background Image-->
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="title" class="form-label">Title</label>
                                    <input id="title" type="text"
                                        name="title"
                                        value="{{ @$about->title ?? '' }}"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description"
                                        class="form-control @error('description') is-invalid @enderror" cols="4" rows="10">
                                        {!! $about->description !!}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary ">
                                    <i class="fa fa-plus-circle"></i> Update </button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    CKEDITOR.replace('description');
</script>
@endpush
