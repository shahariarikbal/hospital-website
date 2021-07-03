@extends('backend.master')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($page == 'index')
            <div class="card mb-3">
                    <div class="card-header">
                    <i class="fas fa-table"></i>
                    Department List
                    <a href="{{ url('/department/create') }}" class="btn btn-primary float-right">Add department</a>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $department)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $department->name }}</td>
                                <td>
                                    <a href="{{ url('/department/edit/'.$department->id.'/'.$department->slug) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('/department/delete/'.$department->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($page == 'create')
            <div class="card mb-3">
                    <div class="card-header">
                    <i class="fas fa-table"></i>
                    Department create
                    <a href="{{ url('/department/index') }}" class="btn btn-primary float-right">Department list</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="{{ url('/department/store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Department name"/>
                                        </div>
                                        <button class="btn btn-success float-right" type="submit">Create</button>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($page == 'edit')
            <div class="card mb-3">
                    <div class="card-header">
                    <i class="fas fa-table"></i>
                    Department update
                    <a href="{{ url('/department/index') }}" class="btn btn-primary float-right">Department list</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="{{ url('/department/update/'.$data->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Department name"/>
                                        </div>
                                        <button class="btn btn-success float-right" type="submit">Create</button>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
