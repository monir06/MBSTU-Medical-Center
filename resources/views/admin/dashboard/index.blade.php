@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
<style>.my-custom-scrollbar {
    position: relative;
    height: 315px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }</style>
<div class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg3"><i class="fa fa-user-o"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{\App\Models\User::All()->count()}}</h3>
                    <span class="widget-title3">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg2"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{\App\Models\Doctor::All()->count()}}</h3>
                    <span class="widget-title2">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{\App\Models\Appointment::All()->count()}}</h3>
                    <span class="widget-title1">Appointments <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>{{\App\Models\Appointment::where('status', 'pending')->count()}}</h3>
                    <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Upcoming Appointments </h4> <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table mb-0">
                            <thead class="d-none">
                                <tr>
                                    <th>Patient Name</th>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Timing</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($upcoming_appointments as $index =>$upcoming)
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">{{substr($upcoming->name, 0, 1)}}</a>
                                        <h2><a href="{{ route('admin.users.show', $upcoming->user_id) }}">{{ $upcoming->name }} <span>{{ $upcoming->session }}</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>{{ $upcoming->s_id }}</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Date</h5>
                                        <p>{{ $upcoming->date }}</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>{{ $upcoming->time }}</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.appointments.update', [$upcoming->id,'completed']) }}" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card member-panel">
                <div class="card-header bg-white">
                    <h4 class="card-title mb-0">Doctors</h4>
                </div>
                <div class="card-body">
                    <ul class="contact-list">
                        @foreach($doctors as $index =>$doctor)
                        <li>
                            <div class="contact-cont">
                                <div class="float-left user-img m-r-10">
                                    <a href="{{ route('admin.doctors.show', $doctor->id) }}" title="{{ $doctor->title }} {{ $doctor->name }}"><img src="{{ asset('backend/img/user.jpg') }}" alt="{{ $doctor->name }}" class="w-40 rounded-circle"><span class="status {{ $doctor->status == 0 ? 'online' : 'offline' }}"></span></a>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-name text-ellipsis">{{ $doctor->title }} {{ $doctor->name }}</span>
                                    <span class="contact-date">{{ $doctor->degree }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="{{ route('admin.doctors.index') }}" class="text-muted">View all Doctors</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Treated Patients </h4> 
                    {{-- <a href="patients.html" class="btn btn-primary float-right">View all</a> --}}
                </div>
                <div class="card-block">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table mb-0 new-patient-table">
                            <thead class="">
                                <tr>
                                    <th class="text-center">Appointment ID</th>
                                    <th class="text-center">Patient Name</th>
                                    <th class="text-center">Session</th>
                                    <th class="text-center">Student ID</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Symptoms</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($completed_appointments as $index =>$completed)
                                <tr>
                                    <td>{{ $completed->appointment_number }}</td>
                                    <td>
                                        <img width="28" height="28" class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt=""> 
                                        <h2>{{ $completed->name }}</h2>
                                    </td>
                                    <td>{{ $completed->session }}</td>
                                    <td>{{ $completed->s_id }}</td>
                                    <td>{{ $completed->updated_at }}</td>
                                    <td>{{ $completed->phone }}</td>
                                    <td><button class="btn btn-primary btn-primary-one">{{ $completed->notes }}</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection