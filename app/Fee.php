<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $table = 'fees';

    protected $fillable = [
        'id',
        'student_id',
        'first_name',
        'last_name',
        'date_paid',
        'payer',
        'fees_balance',
        'fees_paid'
    ];

    public function students()
    {
        return $this->hasOne('App\Student');
    }
    
}
