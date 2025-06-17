<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'contact',
        'emergency_contact',
        'position',
        'employee_id',
        'birth_date',
        'qr',
        'signature',
        'image'
    ];

    protected $casts = [
        'emergency_contact' => 'array',
        'birth_date' => 'date',
    ];
}


   