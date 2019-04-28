<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table= 'subjects';


    protected $fillable = [
        'first_name',
        'last_name',
        'adm_no',
        'subject_code',
        'subject_name',
        'subject_teacher'
    ];
}
