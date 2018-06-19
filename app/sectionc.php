<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectionc extends Model
{
	protected $fillable = ['monthly_id', 'councilmeetings', 'specialactivities', 'specialcomments', 'branchprojects', 'projectcomments'];
    public function monthly() 
	
	{
		return $this ->belongsTo('App\Monthly');
	}
}
