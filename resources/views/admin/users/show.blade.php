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
                            <h3 class="page-header"><i class="fa fa-user"></i> {{ $users->name }} </h3>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Created at: {{ $users->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Details<hr>
                            <address><b>Student ID:</b> {{ $users->s_id }}<br/><b>Phone:</b> {{ $users->phone }}<br><b>Email:</b> {{ $users->email }}<br><b>Session:</b> {{ $users->session }}</address>
                        </div>
                        <div class="col-4">From<hr>
                            <address><b>Dormitory: </b>{{ $users->dormitory }}<br><b>Dept:</b> {{ $users->dept }}</address>
                        </div>
                        <div class="col-4">
                            Others<hr>
                            <b>Blood Group:</b> {{ $users->blood_group }}<br>
                            <b>Gender:</b> {{ $users->gender }}<br>
                            <b>Status:</b> 
                            @if ($users->status == 0)
                              <span class="badge badge-success">Active</span>
                            @else
                              <span class="badge badge-secondary">Inactive</span>
                            @endif
                            <br>
                        </div>
                    </div>
                    
                </section>
            </div>
        </div>
    </div>
</div>
@endsection