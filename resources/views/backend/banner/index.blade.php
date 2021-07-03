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
                    Banner List
                    <a href="{{ url('/banner/create') }}" class="btn btn-primary float-right">Add banner</a>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $banner)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $banner->name }}</td>
                                <td>
                                    <img src="{{ $banner->image }}" height="50" width="100">
                                </td>
                                <td>
                                    <a href="{{ url('/banner/edit/'.$banner->id.'/'.$banner->slug) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('/banner/delete/'.$banner->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
                    Banner create
                    <a href="{{ url('/banner/index') }}" class="btn btn-primary float-right">Banner list</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="{{ url('/banner/store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Banner title"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"/>
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
                    Banner update
                    <a href="{{ url('/banner/index') }}" class="btn btn-primary float-right">Banner list</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form action="{{ url('/banner/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Banner title"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"/>
                                            <img src="{{ $data->image }}" height="100" width="200">
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
