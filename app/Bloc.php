<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{



 
 public function modules(){
	
	return $this->belongsTomany('App\Modules');
}
}
