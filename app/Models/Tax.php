<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable =[
       'employee_id', 'tax_name', 'tax_date','tax_rate', 'tax_type', 'description',
    ];
}
