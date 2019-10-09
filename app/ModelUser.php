<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table = 'model_users';

    protected $fillable = [
        'email','password','name','remember_token'
    ];

}
