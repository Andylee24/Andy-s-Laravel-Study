<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vps extends Model
{
    protected $casts=[
      'user'=>'array'
    ];
}
