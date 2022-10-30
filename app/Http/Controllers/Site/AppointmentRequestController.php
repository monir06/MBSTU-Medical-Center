<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\AppointmentContract;
class AppointmentRequestController extends Controller
{
    protected $appointmentRepository;

    public function __construct(AppointmentContract $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function getAppointment()
    {
        return view('site.pages.appointment');
    }

    public function placeRequest(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            // 'name'     => 'required|max:255',
            // 'email'  => 'required|max:255',
            // 's_id'     => 'required|max:255',
            'date'  => 'required',
            'time'     => 'required|max:255',
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
        ]);
        $appointment = $this->appointmentRepository->storeAppointmentDetails($request->all());
        // dd($appointment);
        $appointment->save();
        return redirect()->route('appointment.list.index')->with('message','Appointment request placed successfully');
        // dd($appointment);
    }
    public function getAppointmentList()
    {
        $appointments = auth()->user()->appointments()->orderBy('id', 'DESC')->paginate(10);

        return view('site.pages.appointmentlist', compact('appointments'));
    }
}