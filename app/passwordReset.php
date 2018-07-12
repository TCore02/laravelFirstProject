<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\passwordReset as Authenticatable;

class passwordReset extends Model
{
    use Notifiable;


    protected $fillable = [
    	'email','token',
    ];
    protected $hidden = [
    	'token',
    ];
}
