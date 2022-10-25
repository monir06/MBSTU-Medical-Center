@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> {{ $pageTitle }}</h1>
            {{-- <p>{{ $subTitle }}</p> --}}
        </div>
    </div>
    <pre></pre>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h3 class="page-header"><i class="fa fa-user"></i> {{ $doctors->title }} {{ $doctors->name }} </h3>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Created at: {{ $doctors->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Details<hr>
                            <address><b>Title:</b> {{ $doctors->title }}<br><b>Name:</b> {{ $doctors->name }}<br><b>Email:</b> {{ $doctors->email }}</address>
                        </div>
                        <div class="col-4">Address<hr>
                            <address><b>Address: </b>{{ $doctors->address }}<br><b>District:</b> {{ $doctors->district }}<br><b>Phone:</b> {{ $doctors->phone }}<br></address>
                        </div>
                        <div class="col-4">
                            Others<hr>
                            <b>Status:</b> 
                            @if ($doctors->status == 0)
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