@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header"><i class="fa fa-calendar"></i> {{ $appointment->appointment_number }}</h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Request Created Date: {{ $appointment->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong>{{ $appointment->name }}</strong><br>Email: {{ $appointment->email }}<br>Phone: {{ $appointment->phone }}</address>
                        </div>
                        <div class="col-4">
                            <address><strong>Student ID:{{ $appointment->s_id }}</strong><br>Session: {{ $appointment->session }}<br>Dept: {{ $appointment->dept }}<br>Dormitory: {{ $appointment->dormitory }}<br></address>
                        </div>
                        <div class="col-4">
                            {{-- <b>Appointment ID:</b> {{ $appointment->appointment_number }}<br> --}}
                            <b>Appointment Date:</b> {{ $appointment->date }}<br>
                            <b>Appointment Time:</b> {{ $appointment->time }}<br>
                            <b>Appointment Status:</b> {{ $appointment->status }}<br>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection