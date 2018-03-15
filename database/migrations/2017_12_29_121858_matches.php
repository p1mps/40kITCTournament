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
            $table->increments('id');
            $table->integer('player_id')->unsigned();
            $table->integer('opponent_id')->unsigned()->nullable();
            $table->integer('winner_id')->unsigned()->nullable();
            $table->integer('list_points')->nullable();
            $table->integer('winner_score')->nullable();
            $table->integer('loser_score')->nullable();
            $table->date('date');
            $table->string('mission')->nullable();
            $table->string('where');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('matches', function ($table) {
            $table->foreign('opponent_id')->references('id')->on('users');
            $table->foreign('player_id')->references('id')->on('users');
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
