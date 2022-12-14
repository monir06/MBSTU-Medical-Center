<header class="header">
    <div class="header-left">
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <img src="{{ asset('backend/img/logo.png') }}" width="35" height="35" alt="">
        </a>
    </div>
    <!-- <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a> -->
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" width="24" alt="">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                {{-- <a class="dropdown-item" href="#">My Profile</a> --}}
                {{-- <a class="dropdown-item" href="#">Edit Profile</a> --}}
                <a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a>
                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
            <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
</header>