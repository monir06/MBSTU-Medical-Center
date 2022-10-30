@extends('site.apphome')
@section('title', 'Appointment List')
@section('content')
<section id="about" class="section-padding">
    <div class="container">
        
        <div class="row">
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
        </div>
        <div class="row app-title">
            <div class="col-lg-12">
            <div class="col-lg-8">
                <h3><i class="fa fa-tags"></i> Appointment List</h3>
            </div>
            <div class="col-lg-4">
                <a href="{{ route('request.index') }}" class="btn btn-primary pull-right">Request Appointment</a>
            </div>
            </div>
        </div>
        <div class="row">
            <main class="col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Appointment No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($appointments as $appointment)
                            <tr>
                                <th scope="row">{{ $appointment->appointment_number }}</th>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>
                                    @if ($appointment->status === 'pending')
                                            <span class="label label-default">{{ucfirst(trans($appointment->status))}}</span>
                                        @elseif ($appointment->status === 'processing')
                                            <span class="label label-info">{{ucfirst(trans($appointment->status))}}</span>
                                        @elseif ($appointment->status === 'completed')
                                            <span class="label label-success">{{ucfirst(trans($appointment->status))}}</span>
                                        @else
                                            <span class="label label-danger">{{ucfirst(trans($appointment->status))}}d</span>
                                        @endif
                                </td>
                            </tr>
                        @empty
                            <div class="col-sm-12">
                                <p class="alert alert-warning">No appointments to display.</p>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </main>
        </div>
        {{ $appointments->links() }}
    </div>
</section>
@stop