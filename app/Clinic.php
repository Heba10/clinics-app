<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function branchs()
    {
      return $this->hasMany('App\Branch');

    }
}
