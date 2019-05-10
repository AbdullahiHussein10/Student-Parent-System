<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table= 'subjects';


    protected $fillable = [

        'subject_code',
        'subject_name',
        'subject_teacher'
    ];

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function teachers()
    {
        return $this->hasMany('App\Teacher');
    }
    public function grades()
    {
        return $this->hasOne('App\Grade');
    }
    public function classes()
    {
        return $this->hasOne('App\Classes');
    }
}
