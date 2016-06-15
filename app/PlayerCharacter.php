<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class playerCharacter extends Model
{
  protected $table = 'player_character';

  public function user() {
    return $this->belongsTo('User');
  }
  public function character() {
    return $this->belongsTo('Character');
  }
  public function profession() {
    return $this->belongsTo('Profession');
  }
  public function skill_1() {
    return $this->belongsTo('Skill', 'id','skill_1_id');
  }
  public function skill_2() {
    return $this->belongsTo('Skill', 'id','skill_2_id');
  }
  public function one_item() {
    return $this->belongsTo('OneItem');
  }
  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
  protected $fillable = ['like', 'dislike', 'skill_1_id', 'skill_2_id', 'one_items_id', 'item_reason', 'reason_for_profession', 'biggest_camp_concern', 'biggest_concern', 'five_year_plan'];

}
