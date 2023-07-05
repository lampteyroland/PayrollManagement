<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'other_name','title','email','phone','dob','street_address',
        'country', 'region','city', 'job_title', 'department', 'work_email','start_date','emergency_first_name',
        'emergency_last_name','emergency_other_name','emergency_title', 'emergency_email', 'emergency_phone',
        'emergency_dob','emergency_street_address','profile_image'
   ];



}
