<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('users')->insert([
			'name'     => 'Andrea',
			'email'    => 'imparato.andrea' . '@gmail.com',
			'password' => bcrypt('secret'),
			'race'     => 'imperial guard',
			'points'   => 1200,
		]);

		DB::table('users')->insert([
			'name'     => 'Riccardo',
			'email'    => 'riccardo' . '@gmail.com',
			'password' => bcrypt('secret'),
			'race'     => 'chaos daemons',
			'points'   => 1200,
		]);

		DB::table('users')->insert([
			'name'     => 'Oliver',
			'email'    => 'oliver' . '@gmail.com',
			'password' => bcrypt('secret'),
			'race'     => 'tau',
			'points'   => 1200,
		]);

		DB::table('matches')->insert([
			'user1_id'     => 1,
			'user2_id'     => 2,
			'user1_points' => 10,
			'user2_points' => 8,

		]);

		DB::table('matches')->insert([
			'user1_id'     => 1,
			'user2_id'     => 3,
			'user1_points' => 15,
			'user2_points' => 8,

		]);

		DB::table('matches')->insert([
			'user1_id'     => 2,
			'user2_id'     => 3,
			'user1_points' => 11,
			'user2_points' => 2,

		]);

	}
}
