<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'appointment_number', 'user_id', 'status', 'name', 'email', 's_id', 'dept',
        'session', 'dormitory', 'phone', 'birthdate', 'blood_group', 'date', 'time', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
