<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
     protected $fillable = [
        'name', 'mobile','address','available'
    ];
}
