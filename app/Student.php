<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'students_id',
        'first_name',
        'last_name',
        'adm_no',
        'grade',
        'gender',
        'date_of_birth',
        'enrollment_date',
        'home_address',

    ];

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }

    public function grades()
    {
        return $this->hasOne('App\Grade');
    }

    public function attendance()
    {
        return $this->hasOne('App\Attendance');
    }

    public function fees()
    {
        return $this->hasOne('App\Fee');
    }

    public function parents()
    {
        return $this->belongsTo('App\Parent');
    }
    public function classes()
    {
        return $this->hasOne('App\Classes');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher');
    }
}
