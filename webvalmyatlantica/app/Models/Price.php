<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    protected $fillable = [
            'cup_id', 'p1_e', 'p2_e', 'p3_e', 'p4_e', 'p5_e', 'p6_e', 'p1_p', 'p2_p', 'p3_p', 'p4_p', 'p5_p', 'p6_p','fecha_vigor', 'fecha_fin'
    ];

    public function cup(): BelongsTo{
        return $this->belongsTo(CUP::class);
    }
}
