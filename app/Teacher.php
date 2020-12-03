<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Teacher extends Model implements AuthenticatableContract
{
    protected $guard = 'teacher';//for setting up guard
     use Authenticatable;
}
