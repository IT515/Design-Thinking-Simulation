<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class characterVideo extends Model {

	public $table = 'characterVideo';

    public $timestamps = false;

    protected $fillable = [
        'charId',
        'chapter',
        'video',
        'mapCoords',
    ];

}
