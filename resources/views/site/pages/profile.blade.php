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
                <h4 class="page-title">Complete Profile</h4>
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}"/>
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone">Phone <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="phone" name="phone" id="phone" value="{{ old('phone', auth()->user()->phone) }}"/>
                            @error('phone') {{ $message }} @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="gender">Gender <span class="m-l-5 text-danger"> *</span></label>
                            <select id="gender" class="form-control custom-select mt-15 @error('gender') is-invalid @enderror" name="gender">
                                    <option>Select a Gender</option>
                                    <option value="Male" {{auth()->user()->gender == 'Male'  ? 'selected' : ''}}> Male </option>
                                    <option value="Female" {{auth()->user()->gender == 'Female'  ? 'selected' : ''}}> Female </option>
                            </select>
                            @error('gender') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="s_id">Student ID <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('s_id') is-invalid @enderror" type="text" name="s_id" id="s_id" value="{{ old('s_id', auth()->user()->s_id) }}" required/>
                            @error('s_id') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dormitory">Dormitory</label>
                            <input class="form-control @error('dormitory') is-invalid @enderror" type="text" name="dormitory" id="dormitory" value="{{ old('dormitory', auth()->user()->dormitory) }}"/>
                            @error('dormitory') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="session">Session</label>
                            <input class="form-control @error('session') is-invalid @enderror" type="text" name="session" id="session" value="{{ old('session', auth()->user()->session) }}"/>
                            @error('session') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dept">Department</label>
                            <input class="form-control @error('dept') is-invalid @enderror" type="text" name="dept" id="dept" value="{{ old('dept', auth()->user()->dept) }}"/>
                            @error('dept') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="blood_group">Blood Group</label>
                            <input class="form-control @error('blood_group') is-invalid @enderror" type="text" name="blood_group" id="blood_group" value="{{ old('blood_group', auth()->user()->blood_group) }}"/>
                            @error('blood_group') {{ $message }} @enderror
                        </div>
                        <!-- {{-- <div class="form-group">
                            <label class="control-label" for="country">Country</label>
                            <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" id="country" value="{{ old('country', $user->country) }}"/>
                            @error('country') {{ $message }} @enderror
                        </div> --}} -->
                        <!-- <div class="form-group">
                            <label class="control-label" for="more_info">More Info</label>
                            <textarea class="form-control" rows="4" name="more_info" id="more_info">{{ old('more_info', auth()->user()->more_info) }}</textarea>
                            @error('more_info') {{ $message }} @enderror
                        </div> -->
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                        &nbsp;&nbsp;&nbsp;
                        <!-- <a class="btn btn-secondary" href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@stop