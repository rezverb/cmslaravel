<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//

	protected $fillable = [
		'header',
		'title',
		'urls',
		'smalldesc',
		'content',
		'active'


	];

}
