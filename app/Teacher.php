<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable =  [
        'first_name',
        'last_name',
        'id_no',
        'date_of_birth',
        'date_of_employment',
        'phone_number',
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
