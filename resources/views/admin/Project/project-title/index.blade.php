@extends('admin.master')

@section('title')
    Project Title
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Project Title</li>
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
                    <form action="" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Title</label>
                                    <input type="text" name="name" value="{{$projectTitle->name}}" class="form-control">
                                </div>
                                <input type="submit" value="Update Info" class="btn btn-primary ">
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


