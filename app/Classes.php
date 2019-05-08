<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $table = 'class';

    protected $fillable = [
        'class_id',
        'class_year'
    ];
    public function teachers()
    {
        return $this->hasMany('App\Teacher');

    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
