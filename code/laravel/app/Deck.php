<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $fillable = [
        'group',
        'description',
        'data'
    ];

    protected $casts = [
     'id' => 'int',
     'data' => 'array'
    ];
}
