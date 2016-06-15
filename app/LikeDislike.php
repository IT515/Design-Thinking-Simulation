<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    public function profession(){
      return $this->belongsTo('Profession');
    }
}
