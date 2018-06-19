<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectiond extends Model
{
	protected $fillable = ['monthly_id', 'cmf', 'cwf', 'cyf', 'rc'];
    public function monthly() 
	
	{
		return $this ->belongsTo('App\Monthly');
	}
}
