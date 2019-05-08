<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{


    public function subject()
    {
        return $this->hasOne('App\Subject');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

}
