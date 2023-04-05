<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customize extends Model
{
    //
    protected $table = 'customizes';
    protected $fillable = [
        'cake_shape',
        'cake_layer',
        'cake_filling',
        'icing',
        'cake_flavor',
        'message',
        'calculated_price' 
    ];
}
