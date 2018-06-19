<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectiona extends Model
{
	
   protected $fillable = ['monthly_id', 'adults', 'children', 'total'];
   public function monthly() 
	
	{
		return $this ->belongsTo('App\Monthly');
	}
}
