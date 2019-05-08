<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable =  [
        'teachers_id',
        'first_name',
        'last_name',
        'email'
    ];

    public function classes()
    {
        return $this->belongsToMany('App\Classes');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
