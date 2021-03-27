<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{


 
 
 public function blocs(){
	
	return $this->belongsTomany('App\Bloc');


}
}