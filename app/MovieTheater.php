<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieTheater extends Model
{
	protected $table='movies_theaters';
	protected $fillable = ['theater_name','theater_capacity','theater_hours'];
	public $timestamps = false;

	public function movies()
	{
		return $this->hasMany('\App\Movie', 'theater_id');
	}
}