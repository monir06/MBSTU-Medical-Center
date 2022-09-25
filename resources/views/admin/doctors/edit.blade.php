@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="title">Title <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $doctor->title) }}"/>
                            @error('title') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $doctor->name) }}"/>
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email', $doctor->email) }}"/>
                            @error('email') {{ $message }} @enderror
                        </div>
                        
                        {{-- <div class="form-group">
                            <label for="theme">Theme <span class="m-l-5 text-danger"> *</span></label>
                            <select id="theme" class="form-control custom-select mt-15 @error('theme') is-invalid @enderror" name="theme">
                                    <option>Select a theme</option>
                                    <option value="Blue" {{$doctor->theme == 'Blue'  ? 'selected' : ''}}> Blue </option>
                                    <option value="Classic" {{$doctor->theme == 'Classic'  ? 'selected' : ''}}> Classic </option>
                            </select>
                            @error('theme') {{ $message }} @enderror
                        </div> --}}
                        <div class="form-group">
                            <label class="control-label" for="phone">Phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{ old('phone', $doctor->phone) }}"/>
                            @error('phone') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="address">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" value="{{ old('address', $doctor->address) }}"/>
                            @error('address') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="district">District</label>
                            <input class="form-control @error('district') is-invalid @enderror" type="text" name="district" id="district" value="{{ old('district', $doctor->district) }}"/>
                            @error('district') {{ $message }} @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label class="control-label" for="city">City</label>
                            <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" value="{{ old('city', $doctor->city) }}"/>
                            @error('city') {{ $message }} @enderror
                        </div> --}}
                        {{-- <div class="form-group">
                            <label class="control-label" for="zipcode">Post Code</label>
                            <input class="form-control @error('zipcode') is-invalid @enderror" type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $doctor->zipcode) }}"/>
                            @error('zipcode') {{ $message }} @enderror
                        </div> --}}
                        {{-- <div class="form-group">
                            <label class="control-label" for="country">Country</label>
                            <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" id="country" value="{{ old('country', $doctor->country) }}"/>
                            @error('country') {{ $message }} @enderror
                        </div> --}}
                        <div class="form-group">
                            <label class="control-label" for="more_info">More Info</label>
                            <textarea class="form-control" rows="4" name="more_info" id="more_info">{{ old('more_info', $doctor->more_info) }}</textarea>
                            @error('more_info') {{ $message }} @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.doctors.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection