<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
  public function like_dislikes(){
    return $this->hasMany('LikeDislike');
  }
  public function one_items(){
    return $this->hasMany('OneItem');
  }
  public function skills(){
    return $this->hasMany('Skill');
  }
}
