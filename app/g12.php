<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class g12 extends Model
{
    protected $fillable = ['type', 'name', 'branch', 'user_id', 'date', 'weeknumber', 'attendance'];
	
	public function user() 
	
	{
		return $this ->belongsTo('App\User');
	}
}
