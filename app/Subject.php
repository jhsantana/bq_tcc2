<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Teacher;

class Subject extends Model
{
   	public $timestamps = false;
	protected $fillable = array('name');

    public function teachers()
    {
		return $this->belongsToMany('App\Teacher');
    }
}
