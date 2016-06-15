<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  // protected $table = 'characters';
  public function playerCharacters() {
    return $this->hasMany('App\PlayerCharacter');
  }

}
