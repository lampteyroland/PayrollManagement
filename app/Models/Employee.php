<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'other_name','title','email','phone','dob','street_address',
        'country', 'region','city', 'job_title', 'department', 'work_email','start_date','emergency_first_name',
        'emergency_last_name','emergency_other_name','emergency_title', 'emergency_email', 'emergency_phone',
        'emergency_dob','emergency_street_address','profile_image'
   ];


// Defining relationships with other tables

    public function salaries(): HasOne
    {
        return $this->hasOne(Salary::class);
    }

    public function taxes(): HasMany
    {
        return $this->hasMany(Tax::class);
    }
    public function allowance(): HasMany
    {
        return $this->hasMany(Allowance::class);
    }


    // generating employee number based on the employee name and count

        protected static function boot()
        {
            parent::boot();

            static::creating(function ($employee) {
                $startNumber = 1000;
                $employeeCount = Employee::count() + 1;
                $employee->employee_number = strtoupper(substr($employee->first_name, 0, 2) . substr($employee->last_name, 0, 2) . ($employeeCount + $startNumber));
            });
        }

// Filtering employee based on a search
        public function scopeFilter($query, array $filters){
               if ($filters['search'] ?? false)
            {
                $query->where('first_name', 'like', '%' . request('search').'%')
                    ->orWhere('last_name', 'like', '%' . request('search').'%');
            }
        }





}
