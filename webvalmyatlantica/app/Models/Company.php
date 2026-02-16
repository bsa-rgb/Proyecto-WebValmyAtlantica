<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'nif',
        'name',
        'phone',
        'email',
        'address_type',
        'address_name',
        'address_number',
        'address_info',
        'city',
        'postal_code',
        'province',
        'energibid_config_id',
    ];
}
