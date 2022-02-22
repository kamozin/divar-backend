<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'seller';

    protected $fillable = [
        'name',
        'address',
        'zip_code',
        'bank',
        'bank_address',
        'swift_code',
        'account_number',
        'email',
        'contract_id',
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
