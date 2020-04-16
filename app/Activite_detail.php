<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite_detail extends Model
{
    public function lang()
    {
    	return $this->belongsTo(Lang::class);
    }
      public function activite()
    {
    	return $this->belongsTo(Activite::class);
    }
}
