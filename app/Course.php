<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	public function Student()
   	{
   		return $this->belongsToMany(Student::class);
   	}
    
}
