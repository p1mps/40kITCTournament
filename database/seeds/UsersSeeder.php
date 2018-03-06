<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('users')->truncate();
		
		DB::table('users')->insert([
			'name'     => 'AndreA',
			'email'    => 'imparato.andrea' . '@gmail.com',
			'password' => bcrypt('secret'),
			'race'     => 'imperiAl Guard',
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
	}
}
