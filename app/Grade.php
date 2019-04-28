<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{


    public function subject()
    {
        return $this->hasOne('Subject::class');
    }

    public function students()
    {
        return $this->hasMany('Student::class');
    }
}
