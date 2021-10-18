<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceReport extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'company_name',
        'name',
        'email',
        'phone',
        'address',
        'serial_no',
        'installed_system',
        'warranty',
        'amc_offer_sent',
        'amc_value',
        'remarks',
        'action_plan',
        'concern_engineer',
    ];
    
}
