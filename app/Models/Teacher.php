<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
    use HasFactory, Notifiable;

    
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'dob',
        'Caste',
        'department',
        'class',
        'emp_type',
        'emailAddress',
        'phoneNumber',
        'password',
        'teacher_id', // Add 'teacher_id' to the $fillable array
    ];
}
