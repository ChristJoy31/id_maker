<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePending extends Model
{
     use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'contact',
        'emergency_contact_name',
        'emergency_contact_number',
        'position',
        'employee_id',
        'birth_date',
        'qr',
        'signature',
        'image'
    ];
}
