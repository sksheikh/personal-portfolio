@extends('admin.master')

@section('title')
    About
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">About</li>
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
                    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!--Start Background Image-->
                                <div class="form-group mb-2">
                                    <label for="">About Image</label>
                                    <div>
                                        <input type="file" name="image" class="form-control mb-2" accept="image/*">
                                        <img src="{{$about->image}}" alt="" width="100" class="border"  >

                                    </div>
                                </div>
                                <!--Start Background Image-->


                                <input type="submit" value="Update Info" class="btn btn-primary ">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Title</label>
                                    <input type="text" name="title" value="{{$about->title}}" class="form-control">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Description</label>
                                    <textarea name="description" id="description"  class="form-control">{!! $about->description !!}</textarea>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection


