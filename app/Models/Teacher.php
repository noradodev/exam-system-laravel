<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'firstName',
        'lastName',
        'gender',
        'dateOfBirth',
        'nationality',
        'Address', // Use 'address' for consistency (optional)
        'phoneNumber', // Use 'phone_number' for consistency (optional)
        'email',
        'password',
    ];
}
