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

    }
}