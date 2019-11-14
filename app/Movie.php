<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['movie_title','release_date','running_time','film_genre','cast','director', 'production_year', 'original_language', 'age_restriction', 'price', 'trailer'];
	public $timestamps = false;

	public function reviews()
	{
		return $this->hasMany('\App\Review', 'movie_id');
	}
	public function movietheater()
	{
		return $this->belongsTo(MovieTheater::class);
	}

}