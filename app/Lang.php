<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
      public function activite_detail()
    {
    	return $this->hasMany(Activite_detail::class);
    }

    public function activite_day()
    {
    	return $this->hasMany(Activity_day::class);
    }
}
