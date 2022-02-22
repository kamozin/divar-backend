<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $table = 'sender';

    protected $fillable = [
        'name',
        'address'
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
