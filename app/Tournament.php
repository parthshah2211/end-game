<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use SoftDeletes;
   protected  $table="tournaments";
   protected  $fillable=['name','description','date','image','category','type','price_type','price_pool'];
}
