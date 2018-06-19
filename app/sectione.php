<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectione extends Model
{
	protected $fillable = ['monthly_id', 'newcells', 'totalcells'];
    public function monthly() 
	
	{
		return $this ->belongsTo('App\Monthly');
	}
}
