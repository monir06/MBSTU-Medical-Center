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
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'  => 'required|max:255',
            's_id'     => 'required|max:255',
            'date'  => 'required',
            'time'     => 'required|max:255',
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255',
        ]);
        $appointment = $this->appointmentRepository->storeAppointmentDetails($request->all());

        dd($appointment);
    }
}