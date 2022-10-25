@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="content">
    <div class="row">
        <div class="col-sm-4 col-3">
            <h4 class="page-title">{{ $pageTitle }}</h4>
        </div>
        <div class="col-sm-8 col-9 text-right m-b-20">
            <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row doctor-grid">
        @foreach($doctors as $doctor)
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{ route('admin.doctors.show', $doctor->id) }}"><img alt="" src="{{ asset('backend/img/doctor.jpg') }}"></a>
                    </div>
                    <div style="padding: 5px 0">
                        <input type="checkbox" data-id="{{ $doctor->id }}" name="status" class="js-switch"
                                            {{ $doctor->status == 0 ? 'checked' : '' }}>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('admin.doctors.show', $doctor->id) }}"><i class="fa fa-eye m-r-5"></i> View</a>
                            <a class="dropdown-item" href="{{ route('admin.doctors.edit', $doctor->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor_{{ $doctor->id }}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{ route('admin.doctors.show', $doctor->id) }}">{{ $doctor->title }} {{ $doctor->name }}</a></h4>
                    <div class="doc-prof">{{ $doctor->degree }}</div>
                    <div class="user-country">
                        <i class="fa fa-phone"></i> {{ $doctor->phone }}
                    </div>

                    {{-- modal part --}}
                    <div id="delete_doctor_{{ $doctor->id }}" class="modal fade delete-modal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <img src="{{ asset('backend/img/sent.png') }}" alt="" width="50" height="46">
                                    <h3>Are you sure want to delete this Doctor?</h3>
                                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <a href="{{ route('admin.doctors.delete', $doctor->id) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="see-all" style="float:right">
                {{ $doctors->links() }}
                <p>
                    Displaying {{$doctors->count()}} of {{ $doctors->total() }} doctor(s).
                </p>
                {{-- <a class="see-all-btn" href="javascript:void(0);">Load More</a> --}}
            </div>
        </div>
    </div>
</div>

<script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });

        $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 0 : 1;
        let doctorId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.doctors.update.status') }}',
            data: {'status': status, 'doctor_id': doctorId},
            success: function (data) {
            // toastr.options.closeButton = true;
            toastr.options.closeMethod = 'fadeOut';
            toastr.options.closeDuration = 100;
            toastr.success(data.message);
            }
        });
    });
});
</script>
@endsection