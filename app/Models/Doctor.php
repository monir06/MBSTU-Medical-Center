<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Doctor extends Model
{
    protected $table = 'doctors';
 
    protected $fillable = [
        'title', 'name', 'email', 'degree', 'gender', 'phone', 'address',
        'district', 'nid', 'regi_no', 'type', 'visit_hour', 'status', 'more_info'
    ];
}