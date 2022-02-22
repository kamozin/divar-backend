<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $table = 'buyer';

    protected $fillable = [
        'name',
        'inn',
        'kpp',
        'ogrn',
        'address',
        'zip_code',
        'bank_details',
        'bank_address',
        'bank_account',
        'corr_account',
        'where_corr_account',
        'account_us',
        'account_eu',
        'bic',
        'swift_code',
        'contract_id',
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
