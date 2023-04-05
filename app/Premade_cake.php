<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premade_cake extends Model
{
    //
    public $table = 'premade_cakes';

    public $dir = '/images/bir/';

    public function getImage($value)
    {
        return $this->dir. $value;
    }
}
