<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weekly extends Model
{
	
	protected $fillable = ['type', 'name', 'branch', 'user_id', 'date', 'event','men', 'women', 'children', 'total', 'preacher'];
	
	public function user() 
	
	{
		return $this ->belongsTo('App\User');
	}
}
