<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

	protected $fillable = [
		'player_id',
		'opponent_id',
		'winner_id',
		'winner_score',
		'loser_score',
		'status',
		'date',
		'where',
		'mission',
		'list_points',

	];

	public $timestamps = true;

	public function player() {
		return $this->belongsTo('App\User');
	}

	public function opponent() {
		return $this->belongsTo('App\User');
	}

	public function winner() {
		return $this->belongsTo('App\User');
	}

	public function getStatusAttribute($value)
    {
    	switch ($value) {
    		case 0:
    			$value = "REQUEST";
    			break;
    		
    		case 1:
    			$value = "ACCEPTED";
    			break;

    		case 2:
    			$value = "DELETED";
    			# code...
    			break;

    		default:
    			# code...
    			break;
    	}

    	return $value;
    }
}
