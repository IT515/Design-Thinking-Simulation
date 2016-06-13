<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model {

    protected $fillable = [
        'groupId',
        'projectName'
    ];

}
