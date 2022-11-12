<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $dt=Carbon::today()->isoFormat('DD/MM/YYYY');
        // $year = Carbon::now()->format('Y');
        // $month = Carbon::now()->format('m');
        // $date = Carbon::now()->format('g:i A');
        $doctors = Doctor::orderBy('status')->get();
        $completed_appointments = Appointment::where('status','completed')
        ->orderBy('updated_at','desc')
        ->get();
        $upcoming_appointments = Appointment::where('date','=',Carbon::today()->isoFormat('DD/MM/YYYY'))
        ->where('time','>=',Carbon::now()->format('g:i A'))
        ->where('status','pending')
        ->orderBy('time')
        ->get();
        return view('admin.dashboard.index', compact('completed_appointments','upcoming_appointments','doctors'));
    }
}
