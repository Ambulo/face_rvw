<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	public function movie()

	{
		return $this->belongsTo('App\Movie');
	}

	public function user()

	{
		return $this->belongsTo('App\User');
	}

}
