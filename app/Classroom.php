<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Classroom extends Model
{
	public $timestamps = false;
	protected $fillable = array('id', 'name');

	public function subjects()
    {
		return $this->belongsToMany('App\Subject');
    }
}
