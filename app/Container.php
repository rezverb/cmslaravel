<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model {


	protected $fillable = [
		'title',
		'description',
		'active'
	];

	protected $table = 'containers';

	public function addPage()
	{
		return $this->belongsToMany('App\Page')->withTimestamps();
	}

	public function getPageList()
	{
		return $this->
	}

}
