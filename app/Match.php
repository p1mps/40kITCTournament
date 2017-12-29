<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

	protected $fillable = [
		'user1_id', 'user2_id', 'user1_points', 'user2_points',
	];

	public $timestamps = true;
}
