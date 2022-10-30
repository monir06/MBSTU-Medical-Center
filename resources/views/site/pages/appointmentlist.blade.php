@extends('site.app')
@section('title', 'Appointment List')
@section('content')
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
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
                                <td><span class="badge badge-success">{{ strtoupper($appointment->status) }}</span></td>
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