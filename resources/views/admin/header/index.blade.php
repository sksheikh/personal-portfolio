@extends('admin.master')

@section('title')
    Header
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Header</li>
        </ol>

        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                    <form action="{{route('headers.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!--Start Background Image-->
                                <div class="form-group">
                                    <label for="">Background Image</label>
                                    <div>
                                        <input type="file" name="bg_image" class="form-control mb-2" accept="image/*">
                                        <img src="{{asset($header->bg_image)}}" alt="" width="100" class="border"  >

                                    </div>
                                </div>
                                <!--Start Background Image-->

                                <!--Start Profile Image-->
                                <div class="form-group mb-3">
                                    <label for="">Profile Image</label>
                                    <div>
                                        <input type="file" name="profile_image" class="form-control mb-2" accept="image/*">
                                        <img src="{{asset($header->profile_image)}}" alt="" width="50" class="border"  >

                                    </div>
                                </div>
                                <!--Start Profile Image-->

                                <input type="submit" value="Update Info" class="btn btn-primary ">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for=""> Name</label>
                                    <input type="text" name="name" value="{{$header->name}}" class="form-control">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Title</label>
                                    <input type="text" name="designation" value="{{$header->designation}}" class="form-control">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume"  class="form-control" accept="application/pdf">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Github Link</label>
                                    <input type="text" name="social_github" value="{{$header->social_github}}" class="form-control">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Linkedin Link</label>
                                    <input type="text" name="social_linkedin" value="{{$header->social_github}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

