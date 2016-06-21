<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
  public function like_dislikes(){
    return $this->hasMany('App\LikeDislike');
  }
  public function one_items(){
    return $this->hasMany('App\OneItem');
  }
  public function skills(){
    return $this->hasMany('App\Skill');
  }
}
