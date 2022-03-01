<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryTerm extends Model
{
    protected $table = 'delivery_terms';

    protected $fillable = [
        'title',
        'title_en',
    ];
}
