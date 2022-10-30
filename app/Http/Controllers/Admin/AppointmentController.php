<?php

namespace App\Http\Controllers\Admin;
use App\Models\Appointment;
use App\Contracts\AppointmentContract;
use App\Http\Controllers\BaseController;
class AppointmentController extends BaseController
{
    protected $appointmentRepository;

    public function __construct(AppointmentContract $appointmentRepository)
    {
        $this->AppointmentRepository = $appointmentRepository;
    }
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'desc')->paginate(10);
        // $appointments = $appointments->reverse();
        $this->setPageTitle('Appointments', 'List of all Appointments');
        return view('admin.appointments.index', compact('appointments'));
    }

    public function show($appointmentNumber)
    {
        $appointment = $this->AppointmentRepository->findAppointmentByNumber($appointmentNumber);

        $this->setPageTitle('Appointment Details', $appointmentNumber);
        return view('admin.appointments.show', compact('appointment'));
    }
    public function create()
    {
        $appointments = Appointment::orderBy('id', 'desc')->get();
    
        $this->setPageTitle('appointments', 'Create Appointment');
        return view('admin.appointments.create', compact('appointments'));
    }
    public function delete($id)
    {
        $appointment = $this->AppointmentRepository->deleteAppointment($id);
        if (!$appointment) {
            return $this->responseRedirectBack('Error occurred while deleting appointment.', 'error', true, true);
        }
        return $this->responseRedirect('admin.appointments.index', 'Appointment deleted successfully' ,'success',false, false);
    }
    public function update($id, $value)
    {
        $appointments = Appointment::where('id', $id)->firstOrFail();
        $appointments->status = $value;
        $appointments->save();
        return $this->responseRedirect('admin.appointments.index', 'Appointment status updated successfully' ,'success',false, false);
    }
}