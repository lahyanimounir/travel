<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    public function activites()
    {
    	return $this->hasMany(Activite::class);
    }
}
