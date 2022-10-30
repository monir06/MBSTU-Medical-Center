@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="content">
    <div class="row app-title">
        <div class="col-8">
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
        {{-- <div class="col-4">
            <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary pull-right">Add appointment</a>
        </div> --}}
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-striped" id="sampleTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Appointment Number </th>
                                <th class="text-center"> Name </th>
                                <th class="text-center"> Phone </th>
                                <th class="text-center"> Date </th>
                                <th class="text-center"> Time </th>
                                <th class="text-center"> Status </th>
                                <th class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $index =>$appointment)
                            <tr>
                                <td scope="row">{{ $index +1 }}</td>
                                <td>{{ $appointment->appointment_number }}</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td class="dropdown text-center">
                                        <a style="display: block;
                                        width: 100%;
                                        padding: .275rem .55rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        /* background-color: #fff; */
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        cursor: pointer;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                                        @if ($appointment->status === 'pending')
                                            <span class="badge badge-secondary">{{ucfirst(trans($appointment->status))}}</span>
                                        @elseif ($appointment->status === 'processing')
                                            <span class="badge badge-info">{{ucfirst(trans($appointment->status))}}</span>
                                        @elseif ($appointment->status === 'completed')
                                            <span class="badge badge-success">{{ucfirst(trans($appointment->status))}}</span>
                                        @else
                                            <span class="badge badge-danger">Declined</span>
                                        @endif
                                        </a>
                                        <ul class="dropdown-menu settings-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.appointments.update', [$appointment->id,'processing']) }}"> Processing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.appointments.update', [$appointment->id,'completed']) }}"> Completed</a>
                                            </li>
                                            {{-- <li>
                                                <a class="dropdown-item" href="{{ route('admin.appointments.update', [$appointment->id,'pending']) }}"> Pending</a>
                                            </li> --}}
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.appointments.update', [$appointment->id,'decline']) }}"> Decline</a>
                                            </li>
                                        </ul>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.appointments.show', $appointment->appointment_number) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('admin.appointments.delete', $appointment->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
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
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endpush