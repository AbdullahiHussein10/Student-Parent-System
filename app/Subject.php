<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table= 'subjects';


    protected $fillable = [
        'adm_no',
        'subject_code',
        'subject_name',
        'subject_teacher'
    ];

    public function students()
    {
        return $this->belongsTo('App\Student', 'id','adm_no');
    }
}
