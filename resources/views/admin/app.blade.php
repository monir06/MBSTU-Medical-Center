<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.ico') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="main-wrapper">
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <main class="page-wrapper">
        @yield('content')
    </main>
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/Chart.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/chart.js') }}"></script> --}}
    <script src="{{ asset('backend/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>