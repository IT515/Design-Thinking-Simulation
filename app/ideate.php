<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ideate extends Model {

	protected $fillable = [
        'userId',
        'groupId',
        'projectId',
        'thought',
        'title',
        'image',
    ];

}
