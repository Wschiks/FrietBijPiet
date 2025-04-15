<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'price',
    ];

    public $timestamps = false; //
}

