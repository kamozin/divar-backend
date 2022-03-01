<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table='documents';

    protected $fillable=[
        'number_document',
        'date_document',
        'delivery_terms',
        'contract_id',
        'truck_number',
        'trailer_number'
    ];
}
