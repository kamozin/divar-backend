<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contract';

    protected $fillable = [
        'number_contract',
        'dt_contract',
        'country_of_origin',
        'terms_of_payment',
        'delivery_terms',
        'status',
    ];

    public function product () {
        return $this->belongsTo(Products::class);
    }

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
