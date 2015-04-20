<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'movies';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'year'];

	public function photos()

	{
		return $this->hasMany('App\Photo');
	}

}
