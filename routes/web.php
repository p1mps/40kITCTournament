<?php

use App\Match;
use App\User;
use Illuminate\Http\Request;
use Jleagle\Elo\Elo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

Route::get('/rules', function () {
	return view('rules');
})->name('rules');

Route::get('/add_match', function () {
	$loggedInid = Auth::id();
	$users      = User::whereNotIn('id', [$loggedInid])->get();
	return view('add_match', ['users' => $users]);
})->name('add_match');

Route::post('/add_match', function (Request $request) {

	$data = $request->all();

	$loggedUser = User::find(Auth::id());
	$opponent   = User::find($data['opponent']);

	$result1 = $data['result'];

	$result2 = null;

	switch ($result1) {
		case 'win':
			$result1 = Elo::WIN;
			$result2 = Elo::LOST;
			break;
		case 'loss':
			$result1 = Elo::LOST;
			$result2 = Elo::WIN;
			break;

		default:
			$result1 = Elo::DRAW;
			$result2 = Elo::DRAW;
			break;
	}

	$ratings = (new Elo(
		$loggedUser->points, $opponent->points, $result1, $result2
	))->getRatings();

	$loggedUser->points = $ratings['a'];
	$opponent->points   = $ratings['b'];

	$match = Match::create([
		'user1_id'     => $loggedUser->getKey(),
		'user2_id'     => $opponent->getKey(),
		'user1_points' => $data['user1_points'],
		'user2_points' => $data['user2_points'],
	]);

	$loggedUser->save();
	$opponent->save();

	return redirect('/match')->with('success', true);
});

Route::get('/match/{match}', function ($match) {

	Match::find($match)->delete();

	return redirect('matches');
	
})->name('match.delete');

Route::get('/matches', function () {

	$loggedInid = Auth::id();
	$matches = Match::orderBy('updated_at', 'desc')->where('player_id', $loggedInid)->get();

	return view('matches', ['matches' => $matches]);
})->name('matches');

Route::get('/rank', function () {

	$users = User::orderBy('points', 'desc')->get();

	return view('rank', ['users' => $users]);
})->name('rank');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
