<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//

	protected $fillable = [
		'nav_title',
		'title',
		'slug',
		'body',
		'active'


	];


	function container()
	{
		return $this->belongsToMany('App\Container');
	}

}
