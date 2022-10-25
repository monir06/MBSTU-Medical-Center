@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="content">
    <div class="row app-title">
        <div class="col-8">
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
        <div class="col-4">
            <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary pull-right">Add doctor</a>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-striped" id="sampleTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th class="text-center"> Name </th>
                                <th class="text-center"> Email </th>
                                <th class="text-center"> Phone </th>
                                <th class="text-center"> Status </th>
                                <th class="text-center"> Created </th>
                                <th class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->title }} {{ $doctor->name }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td class="text-center">
                                    <input type="checkbox" data-id="{{ $doctor->id }}" name="status" class="js-switch"
                                        {{ $doctor->status == 0 ? 'checked' : '' }}>
                                </td>
                                <td>{{ $doctor->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.doctors.show', $doctor->id) }}"
                                            class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                                        {{-- <a href="{{ route('admin.doctors.mail', $doctor->id) }}" class="btn btn-sm btn-info"><i
                                                class="fa fa-paper-plane"></i></a> --}}
                                        <a href="{{ route('admin.doctors.edit', $doctor->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.doctors.delete', $doctor->id) }}"
                                            class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
@endpush