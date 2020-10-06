<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Module extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'course',
    ];

}