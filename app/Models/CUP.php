<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CUP extends Model
{
    protected $table = 'cups';
    
    protected $fillable = [
        'company_id', 'marketer_id', 'code', 'tariff_type',
        'address_type', 'address_name', 'address_number', 
        'address_info', 'localidad', 'cp', 'provincia'
    ];

    public function prices(): HasMany{
        return $this->hasMany(Price::class, 'cup_id');
    }

    public function company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function marketer(): BelongsTo{
        return $this->belongsTo(Marketer::class);
    }
}
