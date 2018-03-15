<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('matches')->truncate();

        DB::table('matches')->insert([
			'player_id'      => 1,
			'opponent_id'    => null,
			'winner_id'	     => null,
			'list_points'    => 1200,
			'winner_score'   => 10,
			'loser_score' 	 => 8,
			'status'		 => 0,
			'where'		 	 => 'Funtaniment',
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);

        DB::table('matches')->insert([
			'player_id'      => 1,
			'opponent_id'    => 2,
			'list_points'    => 1200,
			'winner_score'   => 10,
			'loser_score' 	 => 8,
			'status'		 => 1,
			'where'		 	 => 'Funtaniment',
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);

        DB::table('matches')->insert([
			'player_id'      => 1,
			'opponent_id'    => 3,
			'list_points'    => 1200,
			'winner_score'   => 10,
			'loser_score' 	 => 8,
			'status'		 => 2,
			'where'		 	 => 'Funtaniment',
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);
    }
}
