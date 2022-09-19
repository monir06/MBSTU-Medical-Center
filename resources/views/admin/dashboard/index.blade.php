@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>6</h3>
                    <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg3"><i class="fa fa-user-o"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>15000</h3>
                    <span class="widget-title3">Students <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg2"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>3000</h3>
                    <span class="widget-title2">Completed <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                <div class="dash-widget-info text-right">
                    <h3>18</h3>
                    <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.html" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="d-none">
                                <tr>
                                    <th>Patient Name</th>
                                    <th>ID</th>
                                    <th>Timing</th>
                                    <th class="text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">M</a>
                                        <h2><a href="#">Moniruzzaman <span>ICT 4.2</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>IT-17006</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>11.00 AM</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">H</a>
                                        <h2><a href="#">S.M Hazrat Ali <span>ICT 4.2</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>IT-17016</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>3.00 PM</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">X</a>
                                        <h2><a href="#">MR X <span>TE 3.2</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>TE-19012</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>5.00 PM</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">Y</a>
                                        <h2><a href="#">Mr Y <span>CSE 1.2</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>CSE-20016</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>3.00 PM</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width: 200px;">
                                        <a class="avatar" href="#">Z</a>
                                        <h2><a href="#">Mr Z <span>CSE 2.2</span></a></h2>
                                    </td>                 
                                    <td>
                                        <p>CSE-19050</p>
                                    </td>
                                    <td>
                                        <h5 class="time-title p-0">Timing</h5>
                                        <p>3.00 PM</p>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-outline-primary take-btn">Take up</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card member-panel">
                <div class="card-header bg-white">
                    <h4 class="card-title mb-0">Doctors</h4>
                </div>
                <div class="card-body">
                    <ul class="contact-list">
                        <li>
                            <div class="contact-cont">
                                <div class="float-left user-img m-r-10">
                                    <a href="#" title="Dr Strange"><img src="{{ asset('backend/img/user.jpg') }}" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-name text-ellipsis">Dr Strange</span>
                                    <span class="contact-date">MBBS, MD</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-cont">
                                <div class="float-left user-img m-r-10">
                                    <a href="#" title="Dr Y"><img src="{{ asset('backend/img/user.jpg') }}" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-name text-ellipsis">Dr Y</span>
                                    <span class="contact-date">MBBS</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-cont">
                                <div class="float-left user-img m-r-10">
                                    <a href="#" title="Dr Strange"><img src="{{ asset('backend/img/user.jpg') }}" alt="" class="w-40 rounded-circle"><span class="status away"></span></a>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-name text-ellipsis">Dr Strange</span>
                                    <span class="contact-date">BMBS</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-cont">
                                <div class="float-left user-img m-r-10">
                                    <a href="#" title="DR Y"><img src="{{ asset('backend/img/user.jpg') }}" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-name text-ellipsis">DR Y</span>
                                    <span class="contact-date">MS, MD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center bg-white">
                    <a href="doctors.html" class="text-muted">View all Doctors</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">Treated Patients </h4> <a href="patients.html" class="btn btn-primary float-right">View all</a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table mb-0 new-patient-table">
                            <tbody>
                                <tr>
                                    <td>
                                        <img width="28" height="28" class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt=""> 
                                        <h2>Monir</h2>
                                    </td>
                                    <td>ICT</td>
                                    <td>IT-17006</td>
                                    <td>05-09-2022</td>
                                    <td>25 years</td>
                                    <td>01xxxxxxxxx</td>
                                    <td><button class="btn btn-primary btn-primary-one">Fever</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt=""> 
                                        <h2>Hazrat</h2>
                                    </td>
                                    <td>ICT</td>
                                    <td>IT-17016</td>
                                    <td>05-09-2022</td>
                                    <td>25 years</td>
                                    <td>01xxxxxxxxx</td>
                                    <td><button class="btn btn-primary btn-primary-two">Cold</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt=""> 
                                        <h2>Mr X</h2>
                                    </td>
                                    <td>TE</td>
                                    <td>TE-19028</td>
                                    <td>06-09-2022</td>
                                    <td>24 years</td>
                                    <td>01xxxxxxxxx</td>
                                    <td><button class="btn btn-primary btn-primary-three">Eye</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt=""> 
                                        <h2>Mr Y</h2>
                                    </td>
                                    <td>CSE</td>
                                    <td>CSE-18012</td>
                                    <td>06-09-2022</td>
                                    <td>24 years</td>
                                    <td>01xxxxxxxxx</td>
                                    <td><button class="btn btn-primary btn-primary-four">Acidity</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection