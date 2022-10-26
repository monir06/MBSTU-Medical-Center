{{-- <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script> --}}
<script src="{{ asset('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/jquery.easing.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/custom.js') }}" type="text/javascript"></script>

<script src="{{ asset('frontend/contactform/contactform.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('frontend/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script> --}}
{{-- <script src="{{ asset('frontend/plugins/owlcarousel/owl.carousel.min.js') }}"></script> --}}
{{-- <script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('backend/js/moment.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('backend/js/app.js') }}"></script>
<script>
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'

        });
    });
</script>