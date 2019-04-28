<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
       protected $table= 'parents';


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
    ];
}
