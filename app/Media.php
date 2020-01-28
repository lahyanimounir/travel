<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function activite()
    {
    	return $this->belongsTo(Activite::class);
    }
}
