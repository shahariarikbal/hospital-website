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
                    Doctor List
                    <a href="{{ url('/doctor/create') }}" class="btn btn-primary float-right">Add doctor</a>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Experience</th>
                            <th>Appointment</th>
                            <th>Schdule</th>
                            <th>Fee</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $doctor)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img src="{{ $doctor->avatar }}" height="50px" width="50px" style="border-radius: 100%">
                                    {{ substr($doctor->first_name. ' ' .$doctor->last_name, 0, 15) }}
                                </td>
                                <td>{{ $doctor->department ? $doctor->department->name : 'No department found' }}</td>
                                <td>{{ $doctor->experience }} Years</td>
                                <td>{{ $doctor->appointment }}</td>
                                <td>{{ $doctor->schdule }}</td>
                                <td>{{ $doctor->price }} tk.</td>
                                <td>
                                    <a href="{{ url('/doctor/edit/'.$doctor->id.'/'.$doctor->slug) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('/doctor/delete/'.$doctor->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
                        Doctor registration
                        <a href="{{ url('/doctor/index') }}" class="btn btn-primary float-right">Doctor list</a>
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row well">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <form action="{{ url('/doctor/store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Department name</label>
                                            <select class="form-control" name="dept_id">
                                                <option selected disabled>Select a department</option>
                                                @foreach ($department as $info)
                                                    <option value="{{ $info->id }}">{{ $info->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="First name"/>
                                            @if($errors->has('first_name'))
                                                <div class="error">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last name"/>
                                            @if($errors->has('last_name'))
                                                <div class="error">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"/>
                                            @if($errors->has('email'))
                                                <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone number"/>
                                            @if($errors->has('phone'))
                                                <div class="error">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Experience</label>
                                            <input type="text" name="experience" class="form-control" placeholder="Experience"/>
                                            @if($errors->has('experience'))
                                                <div class="error">{{ $errors->first('experience') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Expertise</label>
                                            <input type="text" name="expertise" class="form-control" placeholder="Expertise"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Board certification</label>
                                            <input type="text" name="board_certification" class="form-control" placeholder="Board certification"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Appointment</label>
                                            <input type="text" name="appointment" class="form-control" placeholder="Appointment"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Schdule</label>
                                            <input type="time" name="schdule" class="form-control" placeholder="Schdule"/>
                                        </div>
                                        <div class="form-group">
                                            <label>NID Number</label>
                                            <input type="number" name="nid" class="form-control" placeholder="National Id Number"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Fee</label>
                                            <input type="text" name="price" class="form-control" placeholder="Doctor fee"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Avatar</label><br/><br/>
                                            <input type="file" name="avatar" accept="image/*"/>
                                        </div>
                                        <br/>
                                        <button class="btn btn-success float-right" type="submit">Create</button>
                                    </form>
                                </div>
                                <div class="col-md-1"></div>
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
                    Doctor update
                    <a href="{{ url('/doctor/index') }}" class="btn btn-primary float-right">Doctor list</a>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row well">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <form action="{{ url('/doctor/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Department name</label>
                                        <select class="form-control" name="dept_id">
                                            <option selected disabled>Select a department</option>
                                            @foreach ($department as $info)
                                                <option value="{{ $info->id }}" {{ isset($data->dept_id) && $data->dept_id == $info->id ? 'selected': '' }}>{{ $info->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" value={{ $data->first_name }} placeholder="First name"/>
                                        @if($errors->has('first_name'))
                                            <div class="error">{{ $errors->first('first_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value={{ $data->last_name }} placeholder="Last name"/>
                                        @if($errors->has('last_name'))
                                            <div class="error">{{ $errors->first('last_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value={{ $data->email }} placeholder="Email"/>
                                        <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value={{ $data->phone }} placeholder="Phone number"/>
                                        @if($errors->has('phone'))
                                            <div class="error">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" name="experience" class="form-control" value={{ $data->experience }} placeholder="Experience"/>
                                        @if($errors->has('experience'))
                                            <div class="error">{{ $errors->first('experience') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Expertise</label>
                                        <input type="text" name="expertise" class="form-control" value={{ $data->expertise }} placeholder="Expertise"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Board certification</label>
                                        <input type="text" name="board_certification" class="form-control" value={{ $data->board_certification }} placeholder="Board certification"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Appointment</label>
                                        <input type="text" name="appointment" class="form-control" value={{ $data->appointment }} placeholder="Appointment"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Schdule</label>
                                        <input type="time" name="schdule" class="form-control" value={{ $data->schdule }} placeholder="Schdule"/>
                                    </div>
                                    <div class="form-group">
                                        <label>NID Number</label>
                                        <input type="number" name="nid" class="form-control" value={{ $data->nid }} placeholder="National Id Number"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Fee</label>
                                        <input type="text" name="price" class="form-control" value={{ $data->price }} placeholder="Doctor fee"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" placeholder="Address">{{ $data->address }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Avatar</label><br/><br/>
                                        <input type="file" name="avatar" accept="image/*"/><br/>
                                        <img src="{{ $data->avatar }}" height="100" width="100"><br/>
                                        <span style="color: red"> {{ $errors->has('avatar') ? $errors->first('avatar') : ' ' }}</span>
                                    </div>
                                    <br/>
                                    <button class="btn btn-success float-right" type="submit">Update</button>
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
