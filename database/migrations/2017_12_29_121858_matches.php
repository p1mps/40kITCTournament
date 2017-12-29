<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Matches extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('matches', function (Blueprint $table) {
			$table->integer('user2_id')->unsigned();
			$table->integer('user1_id')->unsigned();
			$table->integer('user1_points')->unsigned();
			$table->integer('user2_points')->unsigned();
			$table->timestamps();
		});

		Schema::table('matches', function ($table) {
			$table->foreign('user1_id')->references('id')->on('users');
			$table->foreign('user2_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('matches');
	}
}
