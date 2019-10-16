<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = ['name', "email", "password", 'age'];


    use HasApiTokens, Notifiable;
}
