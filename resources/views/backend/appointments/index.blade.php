@extends('backend.master')

@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            @if ($page == 'index')
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Appointment List
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Patient name</th>
                                    <th>Doctor name</th>
                                    <th>Patient phone</th>
                                    <th>Patient email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $key => $appointment)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->doctor ? $appointment->doctor->first_name. ' ' .$appointment->doctor->last_name : '' }}</td>
                                        <td>{{ $appointment->phone }}</td>
                                        <td>{{ $appointment->email }}</td>
                                        <td>
                                            <a href="{{ url('/appointment/show/'.$appointment->id) }}" class="btn btn-info btn-sm">Show</a>
                                            <a href="{{ url('/appointment/delete/'.$appointment->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
    @if ($page == 'show')
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Appointment details
                <a href="{{ url('/appointment/list') }}" class="btn btn-primary float-right">Appointment list</a>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Patient name</th>
                                    <td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <th>Doctor name</th>
                                    <td>{{ $data->doctor ? $data->doctor->first_name . ' ' . $data->doctor->last_name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Patient phone</th>
                                    <td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Patient email</th>
                                    <td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <th>Patient date</th>
                                    <td>{{ $data->appointment_date }}</td>
                                </tr>
                                <tr>
                                    <th>Patient message</th>
                                    <td>{{ $data->message }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endif
        </div>
        </div>
@endsection
