<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $primaryKey = 'user_id';
	protected $table = "reviews";
	protected $fillable = ['rating','title','description'];
	public $timestamps = false;

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}