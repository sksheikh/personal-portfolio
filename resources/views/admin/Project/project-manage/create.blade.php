@extends('admin.master')

@section('title')
    Project
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Project</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Project</li>
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
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                        <a href="{{route('projects.index')}}" class="btn btn-primary float-end">Manage Project</a>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>

                        <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">--Select Category--</option>
                                            @foreach($projectCategories as $projectCategory)
                                            <option value="{{$projectCategory->id}}">{{$projectCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">Url</label>
                                        <input type="text" name="project_url" class="form-control">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">Status</label>
                                        <label for="published"><input id="published" type="radio" name="status" value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                    </div>

                                    <input type="submit" value="create" class="btn btn-info">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection




