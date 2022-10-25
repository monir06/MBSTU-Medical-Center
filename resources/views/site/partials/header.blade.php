<!--banner-->
<section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				</button>
              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="img-responsive" style="height: auto;width: 80%; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
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
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="{{ asset('frontend/img/logo.png') }}" class="img-responsive" height="70px" width="140px">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare at your fingertips!!</h1>
              <p>The medical centre of MBSTU is equipped with necessary instruments and doctor to provide appropriate <br> health care to the students and it is always ready to face any sudden situation.</p>
              @guest
                <a href="{{ url('auth/google') }}" class="btn btn-appoint">Make an Appointment.</a>
              @else
                <a href="#" class="btn btn-appoint">Make an Appointment.</a>
              @endguest
            </div>
            @guest
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  @include('site.partials.nav')