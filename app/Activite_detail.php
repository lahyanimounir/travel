<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite_detail extends Model
{
    public function langs()
    {
    	return $this->hasMany(Lang::class);
    }
      public function activite()
    {
    	return $this->belongsTo(Activite::class);
    }
}
