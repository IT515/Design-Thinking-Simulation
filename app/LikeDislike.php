<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
  protected $table = 'like_dislike';

  public function profession(){
    return $this->belongsTo('App\Profession');
  }
}
