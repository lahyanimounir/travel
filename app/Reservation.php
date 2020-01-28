<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
      public function activite()
    {
    	return $this->belongsTo(Activite::class);
    }
}
