<?php

namespace App;

use app\user;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
   public function user()
    {
        return $this->belongsTo('App\User');
    }
}
