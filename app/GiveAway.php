<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GiveAway extends Model
{
    use SoftDeletes;
    protected  $table="give_aways";
    protected  $fillable=['title','registration_date','announcement_date','description','image','category'];
}
