<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Authenticatable;

class Student extends Authenticatable
{
	protected $fillable = [
        'name', 'matricule', 'phone', 'email', 'date_of_birth', 'place_of_birth', 'password',
    ];

    public function course()
   	{
   		return $this->belongsToMany(Course::class);
   	}

   	public function department()
   	{
   		return $this->belongsTo(Department::class);
   	}
}
