<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable 
{ 
	use Notifiable;

	protected $fillable = ['name','email','password','phone','role_type','sex'];

	protected $hidden =['password','remember_token',];
public function students(){
	return $this->hasMany('App\students');
}
public function roles(){
	return $this->belongsToMany('App\Role');
}
       
}

 
