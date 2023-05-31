@extends('admin.master')

@section('title')
    Contact
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Customer Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Customer Contact</li>
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
                        <table id="datatablesSimple" class="display nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Time</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">View</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        <a href="" class="btn btn-sm btn-success">Reply</a>
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

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({
                scrollX: true,
            });
        });
    </script>
@endsection



