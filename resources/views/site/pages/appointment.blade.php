@extends('site.apphome')
@section('title', 'Request Appointment')
@section('content')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}" /> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.min.css') }}" /> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/select2.min.css') }}" /> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap-datetimepicker.min.css') }}" />
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}" /> --}}
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">

<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-2">
                <h4 class="page-title">Request Appointment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('appointment.place.request') }}" method="POST" role="form">
                    @csrf
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Appointment ID</label>
                                <input class="form-control" type="text" value="APT-0001" readonly="">
                            </div>
                        </div> 
                    </div> --}}
                    {{-- <input type="hidden" name="s_id" value="{{ auth()->user()->s_id }}" readonly=""> --}}
                    {{-- <input type="hidden" name="session" value="{{ auth()->user()->session }}" readonly=""> --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="cal-icon">
                                    <input type="text" name="date" class="form-control datetimepicker" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="time-icon">
                                    <input type="text" name="time" class="form-control" id="datetimepicker3" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                @error('phone') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                        <label>Primary Symptoms</label>
                        <input type="text" class="form-control @error('notes') is-invalid @enderror" name="notes" placeholder="Fever/Cold/Headache/Acidity....">
                                @error('notes') {{ $message }} @enderror
                        </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Request Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop