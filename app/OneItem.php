<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneItem extends Model
{
  public function profession(){
    return $this->belongsTo('App\Profession');
  }
}
