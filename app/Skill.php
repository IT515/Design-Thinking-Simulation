<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  public function profession(){
    return $this->belongsTo('Profession');
  }
}
