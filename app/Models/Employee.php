<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'other_name','title','email','phone','dob','street_address',
        'country', 'region','city', 'job_title', 'department', 'work_email','start_date','emergency_first_name',
        'emergency_last_name','emergency_other_name','emergency_title', 'emergency_email', 'emergency_phone',
        'emergency_dob','emergency_street_address','profile_image'
   ];

    public function salaries(): HasOne
    {
        return $this->hasOne(Salary::class);
    }

        protected static function boot()
        {
            parent::boot();

            static::creating(function ($employee) {
                $startNumber = 1000;
                $employeeCount = Employee::count() + 1;
                $employee->employee_number = strtoupper(substr($employee->first_name, 0, 2) . substr($employee->last_name, 0, 2) . ($employeeCount + $startNumber));
            });
        }





}
