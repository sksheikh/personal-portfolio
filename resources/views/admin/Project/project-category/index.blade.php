@extends('admin.master')

@section('title')
    Project Category
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Project Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Project Category</li>
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
                        <a href="" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#projectCategory">Create Category</a>
                    </div>
                    <div class="card-body">
                        <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Data filter</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Data filter</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($projectCategories as $projectCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$projectCategory->name}}</td>
                                <td>{{$projectCategory->data_filter}}</td>
                                <td>{{$projectCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('project-categories.edit',$projectCategory->id)}}" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#projectCategoryEdit">Edit</a>
                                    <form action="{{route('project-categories.destroy',$projectCategory->id)}}" method="post" class="d-inline-block" onclick="confirm('Are you sure delete this?')">
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
    <!--Start Category Create Modal-->
    <div class="modal" tabindex="-1" id="projectCategory">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('project-categories.store')}}" method="post" >
                        @csrf
                        <div class="form-group mb-2">
                            <label for="">Category Name</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Status</label>
                            <label for="published"><input id="published" type="radio" name="status" value="1" checked>Published</label>
                            <label for="unpublished"><input id="unpublished" type="radio" name="status" value="0">Unpublished</label>
                        </div>
                        <input type="submit" value="Create" class="btn btn-primary ">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End Category Create Modal-->

    <!--Start Category Edit Modal-->
    <div class="modal" tabindex="-1" id="projectCategoryEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('project-categories.update',$projectCategory->id)}}" method="post" >
                        @csrf
                        @method('put')
                        <div class="form-group mb-2">
                            <label for="">Category Name</label>
                            <input type="text" name="name"  value="{{$projectCategory->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Status</label>
                            <label for="statusPublished"><input id="statusPublished" type="radio" name="status" value="1" {{$projectCategory->status == 1 ? 'checked' : ''}}>Published</label>
                            <label for="statusUnpublished"><input id="statusUnpublished" type="radio" name="status" value="0" {{$projectCategory->status == 0 ? 'checked' : ''}}>Unpublished</label>
                        </div>
                        {{$projectCategory->status}}
                        <input type="submit" value="Update" class="btn btn-primary ">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--End Category Edit Modal-->
@endsection



