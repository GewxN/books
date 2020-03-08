<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typebooks extends Model
{
    protected $table = 'typebooks';

    public function books(){
        return $this->hasMany(Books::class);
    }
}
