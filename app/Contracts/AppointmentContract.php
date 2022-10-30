<?php
namespace App\Contracts;

interface AppointmentContract
{
    public function storeAppointmentDetails($params);

    public function listAppointments(string $appointment = 'id', string $sort = 'desc', array $columns = ['*']);

    public function findAppointmentByNumber($appointmentNumber);
}