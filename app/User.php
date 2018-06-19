<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'branch',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function g12() 
	
	{
		return $this ->hasMany('App\G12');
	}
	
	public function monthly() 
	
	{
		return $this ->hasMany('App\Monthly');
	}
	
	public function weekly() 
	
	{
		return $this ->hasMany('App\Weekly');
	}
}
