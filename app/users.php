<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Model
{
    //

    use Notifiable;


    protected $fillable = [

        'pay_day',
        'user_id',
        'unlocked_day'
        
    ];

   


}
