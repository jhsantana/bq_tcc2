<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = array('enrollment', 'name','email', 'password');
    protected $guarded = ['id','password'];


    public function subjects()
    {
		return $this->belongsToMany('App\Subject');
    }
}
