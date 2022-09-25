<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Panel</li>
                <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.doctors.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.doctors.index') }}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                </li>
                <li>
                    <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                </li>
                <li>
                    <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
                <li>
                    <a href="schedule.html"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                </li>
                <li>
                    <a href="assets.html"><i class="fa fa-cube"></i> <span>Assets</span></a>
                </li>
                <li>
                    <a href="expense-reports.html"><i class="fa fa-flag-o"></i> <span> Expense Reports </span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span> Contact Box</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>