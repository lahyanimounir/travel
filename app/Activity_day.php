<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_day extends Model
{
   	public function activite()
    {
    	return $this->belongsTo(Activite::class);
    }

    public function lang()
    {
    	return $this->belongsTo(Lang::class);
    }
}
