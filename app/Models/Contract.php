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
        'status',
        'buyer_id',
        'seller_id',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function buyer () {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'id');
    }

    public function seller () {
        return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
