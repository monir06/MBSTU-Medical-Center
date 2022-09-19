<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.ico') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="{{ route('admin.login.post') }}" class="form-signin" method="POST" role="form">
                        @csrf
						<div class="account-logo">
                            <a href="#"><img src="{{ asset('backend/img/logo.png') }}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Stay Signed in
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/Chart.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/js/chart.js') }}"></script> --}}
    <script src="{{ asset('backend/js/app.js') }}"></script>
</body>

</html>