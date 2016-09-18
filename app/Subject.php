<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Teacher;
use App\Classroom;

class Subject extends Model
{
   	public $timestamps = false;
	protected $fillable = array('classroom_id','name');

    public function teachers()
    {
		return $this->belongsToMany('App\Teacher');
    }

    public function classrooms()
    {
		return $this->belongsToMany('App\Classroom');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
