<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['name','email','password','confirm_password','age','usertype'];
	public $timestamps = false;
}