<!--nav-->
<header class="section" style="margin-bottom: 10em;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background: rgba(28,74,90, 0.9)">
    <div class="container">
        <div class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-responsive" style="height: 3em; margin-top: -16px;"></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="{{ Route::currentRouteName() == 'appointment.list.index' ? 'active' : '' }}"><a href="{{ route('appointment.list.index') }}">Appointment</a></li>
            <li class=""><a href="#about">About</a></li>
            <li class=""><a href="#contact">Contact</a></li>
            @guest
                <li class=""><a href="{{ url('auth/google') }}">Login</a></li>
            @else
                <li class="">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
            </ul>
        </div>
        </div>
    </div>
    </nav>
</header>
  <!--/ nav-->