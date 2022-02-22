<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title',
        'title_ru',
        'code',
        'foreign_code',
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
