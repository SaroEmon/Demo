<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function doctorAppointment()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
}
