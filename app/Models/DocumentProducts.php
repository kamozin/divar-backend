<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentProducts extends Model
{
    protected $table='document_product';

    protected $fillable=[
        'product_id',
        'package_id',
        'count_package',
        'weight_netto',
        'weight_brutto',
        'price',
        'price_total'
    ];


}
