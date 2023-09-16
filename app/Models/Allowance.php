<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Allowance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['employee_id','allowance_name','allowance_amount', 'currency', 'allowance_date', 'is_taxable', 'remarks' ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}

