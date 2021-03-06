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
      $table->integer('skill_1_id')->unsigned()->nullable();
      $table->integer('skill_2_id')->unsigned()->nullable();
      $table->integer('one_items_id')->unsigned()->nullable();
      $table->string('like')->nullable();
      $table->string('dislike')->nullable();
      $table->string('item_reason', 1000)->nullable();
      $table->string('reason_for_character', 1500)->nullable();
      $table->string('quote', 1000)->nullable();
			$table->timestamps();

      $table->unique('user_id');
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
    // $table->dropForeign('player_character_user_id_foreign');
    // $table->dropForeign('player_character_character_id_foreign');
    // $table->dropForeign('player_character_skill_1_id_foreign');
    // $table->dropForeign('player_character_skill_2_id_foreign');
    // $table->dropForeign('player_character_one_items_id_foreign');
		Schema::drop('player_character');
	}

}
