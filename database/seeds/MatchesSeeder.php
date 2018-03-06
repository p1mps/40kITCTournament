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
			'opponent_id'    => 2,
			'points'         => 1200,
			'player_score'   => 10,
			'opponent_score' => 8,
			'status'		 => 0,
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);

        DB::table('matches')->insert([
			'player_id'      => 1,
			'opponent_id'    => 2,
			'points'         => 1200,
			'player_score'   => 10,
			'opponent_score' => 8,
			'status'		 => 1,
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);

        DB::table('matches')->insert([
			'player_id'      => 1,
			'opponent_id'    => 3,
			'points'         => 1200,
			'player_score'   => 10,
			'opponent_score' => 8,
			'status'		 => 2,
			'date' 			 => Carbon::parse('2000-01-01'),
			'mission'        => 'Ethernal war'
		]);
    }
}
