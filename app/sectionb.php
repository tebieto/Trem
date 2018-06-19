<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectionb extends Model
{
	
	protected $fillable = ['monthly_id', 'tithers', 'newmembers'];
    public function monthly() 
	
	{
		return $this ->belongsTo('App\Monthly');
	}
}
