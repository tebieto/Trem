<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monthly extends Model
{
	public $with = ['sectiona', 'sectionb', 'sectionc', 'sectiond', 'sectione'];
	
    protected $fillable = ['type', 'name', 'branch', 'user_id', 'date'];
	
	public function user() 
	
	{
		return $this ->belongsTo('App\User');
	}
	
	public function sectiona() 
	
	{
		return $this ->hasOne('App\Sectiona');
	}
	
	public function sectionb() 
	
	{
		return $this ->hasOne('App\Sectionb');
	}
	
	public function sectionc() 
	
	{
		return $this ->hasOne('App\Sectionc');
	}
	
	public function sectiond() 
	
	{
		return $this ->hasOne('App\Sectiond');
	}
	
	public function sectione() 
	
	{
		return $this ->hasOne('App\Sectione');
	}
}
