<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'race', 'points',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function matches() {
		return $this->belongsTo('App\Match');
	}

	public function getRaceAttribute($value) {
		return ucwords(strtolower($value));
	}

	public function getNameAttribute($value) {
		return ucwords(strtolower($value));
	}
}
