<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Subject;

class Teacher extends Model
{
    public $timestamps = false;
	protected $fillable = array('enrollment', 'name','email', 'password');
    protected $guarded = ['password'];

    public function subjects()
    {
		return $this->belongsToMany('App\Subject');
    }
}