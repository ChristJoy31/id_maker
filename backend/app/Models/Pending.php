<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pending extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'course',
        'student_id',
        'contact',
        'emergency_contact',
        'birth_date',
        'signature',
        'image',
        'qr_code' ,
    ];
    
    protected $casts = [
        'emergency_contact' => 'array',
        'birth_date' => 'date',
    ];
}
