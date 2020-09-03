<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterUserGiveWay extends Model
{
    protected  $table="register_user_giveway";
    protected  $fillable=['giveway_id','user_id'];
}
