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
                        <a href="{{route('projects.create')}}" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#projectCreate">Create Project</a>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Project Url</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Project Url</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->category->name}}</td>
                                    <td>{{$project->project_url}}</td>
                                    <td>{{$project->slug}}</td>
                                    <td><img src="{{asset($project->image)}}" alt="" width="50"></td>
                                    <td>{{$project->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('projects.edit',$project->id)}}" class="btn btn-sm btn-info" >Edit</a>
                                        <form action="" method="post" class="d-inline-block" onclick="confirm('Are you sure delete this?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"  class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Start Project Create Modal-->
    <div class="modal" tabindex="-1" id="projectCreate">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

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
                </div>
                <div class="modal-body">
                    <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">--Select Category--</option>
                                @foreach($projectCategories as $projectCategory)
                                    <option value="{{$projectCategory->id}}">{{$projectCategory->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Url</label>
                            <input type="text" name="project_url" class="form-control" required>
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

                        <input type="submit" value="create" class="btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End Project Create Modal-->


    <!--Start Project Edit Modal-->
    <div class="modal" tabindex="-1" id="projectEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

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
                </div>
                <div class="modal-body">
                    <form action="{{route('projects.update',$project->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group mb-2">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$project->name}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="" disabled class="bg-dark">--Select Category--</option>
                                @foreach($projectCategories as $projectCategory)
                                    <option value="{{$projectCategory->id}}" {{$projectCategory->id == $project->category->id ? 'selected' : ''}}>{{$projectCategory->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Url</label>
                            <input type="text" name="project_url" value="{{$project->project_url}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <img src="{{asset($project->image)}}" alt="" class="mt-2" width="100">
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Status</label>
                            <label for="published2"><input id="published2" type="radio" name="status" value="1" {{$project->status }}>Published</label>
                            <label for="Unpublished2"><input id="Unpublished2" type="radio" name="status" value="0" {{$project->status}} >Unpublished</label>
                        </div>

                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End Project Edit Modal-->
@endsection




