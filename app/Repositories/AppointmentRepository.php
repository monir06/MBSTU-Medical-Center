<?php
namespace App\Repositories;

use App\Models\Appointment;
use App\Contracts\AppointmentContract;

class AppointmentRepository extends BaseRepository implements AppointmentContract
{
    public function __construct(Appointment $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function storeAppointmentDetails($params)
    {
        $appointment = Appointment::create([
            'appointment_number'      =>  'APT-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'name'              =>  auth()->user()->name,
            'email'             =>  auth()->user()->email,
            's_id'              =>  auth()->user()->s_id,
            'dept'              =>  auth()->user()->dept,
            'session'           =>  auth()->user()->session,
            'dormitory'         =>  auth()->user()->dormitory,
            'phone'             =>  $params['phone'],
            'birthdate'         =>  auth()->user()->birthdate,
            'blood_group'       =>  auth()->user()->blood_group,
            'date'              =>  $params['date'],
            'time'              =>  $params['time'],
            'notes'             =>  $params['notes']
        ]);
        
        return $appointment;
    }
    public function listAppointments(string $appointment = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $appointment, $sort);
    }

    public function findAppointmentByNumber($appointmentNumber)
    {
        return Appointment::where('appointment_number', $appointmentNumber)->first();
    }
    public function findAppointmentById($id)
    {
        return Appointment::where('id', $id)->first();
    }
    public function deleteAppointment($id)
    {
        $appointment = $this->findAppointmentById($id);
 
        $appointment->delete();
 
        return $appointment;
    }
}