<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function faculty()
   	{
   		return $this->belongsTo(Faculty::class);
   	}
}
