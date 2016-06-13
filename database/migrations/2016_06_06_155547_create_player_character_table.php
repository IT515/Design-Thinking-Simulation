<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerCharacterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_character', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('character_id')->unsigned();
      $table->integer('skill_1_id')->unsigned();
      $table->integer('skill_2_id')->unsigned();
      $table->integer('one_items_id')->unsigned();
      $table->string('like');
      $table->string('dislike');
      $table->string('item_reason', 1000);
      $table->string('reason_for_character', 1500);
      $table->string('quote', 1000);
			$table->timestamps();
		});

    Schema::table('player_character', function(Blueprint $table)
    {
      $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
      $table->foreign('character_id')
            ->references('id')->on('characters');
      $table->foreign('skill_1_id')
            ->references('id')->on('skills');
      $table->foreign('skill_2_id')
            ->references('id')->on('skills');
      $table->foreign('one_items_id')
            ->references('id')->on('one_items');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_character');
	}

}
