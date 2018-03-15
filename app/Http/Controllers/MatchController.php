<?php

namespace App\Http\Controllers;

use App\Match;
use App\User;
use Illuminate\Http\Request;
use Jleagle\Elo\Elo;

class MatchController extends Controller
{
	private $loggedUser;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function accept(Request $request, $id)
    {
    	$match = Match::find($id);
    	$match->opponent_id = \Auth::id();
    	$match->save();

    	return redirect('matches');
    }

    public function delete(Request $request, $id)
    {
    	Match::find($id)->delete();

    	return redirect('matches');	
    }

    public function viewRequest(Request $request)
    {
    	$match = new Match();
    	return view('request_match', ['match' => $match]);	
    }

    public function viewEdit(Request $request, $id)
    {
    	$match = Match::find($id);
    	$player = $match->player()->first();
    	$opponent = $match->opponent()->first();
    	$players = [];

    	$players[$player->getKey()] = $player->name;

    	if($opponent) {
    		$players[$opponent->getKey()] = $opponent->name;
    	}

    	return view('edit_match', ['match' => $match, 'players' => $players]);	
    }

    public function request(Request $request)
    {
    	$match = Match::create([
    		'player_id' => \Auth::id(),
    		'points' => $request['points'],
    		'where'	=> $request['where'],
    		'date'	=> $request['date'],
    		'status' => 0
    	]);

    	return redirect('matches');
    }

    public function editMatch(Request $request, $id)
    {
    	$match = Match::find($id);
    	$matchUpdated = $match->update($request->all());

		if ($matchUpdated) {
			$this->updateRanking($match);
		}

    	return redirect('matches');
    }

    private function updateRanking($match) 
    {
    	$winner = $match->winner()->first();
    	$player = $match->player()->first();
    	$opponent = $match->opponent()->first();

    	if ($winner == $player) {
    		$ratings = (new Elo(
				$player->points, $opponent->points, Elo::WIN, Elo::LOST ));	
    	} else {
    		$ratings = (new Elo(
				$player->points, $opponent->points, Elo::LOST, Elo::WIN ));	
    	}

    	$ratings = $ratings->getRatings();
    	$player->points = $ratings['a'];
    	$opponent->points   = $ratings['b'];	
    	$player->save();
    	$opponent->save();
    }
}
