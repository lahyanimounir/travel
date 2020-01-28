<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
      public function activite_detail()
    {
    	return $this->belongsTo(Activite_detail::class);
    }
}
