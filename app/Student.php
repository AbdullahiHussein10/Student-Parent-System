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
        'parent_first_name',
        'parent_last_name',
        'parent_email',
        'parent_phone_number',
        'email',
        'phone_number',
    ];

    public function subjects()
    {
        return $this->hasMany('App\Subject','id','subject_code','subject_name');
    }
}
