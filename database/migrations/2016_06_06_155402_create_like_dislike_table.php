<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeDislikeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('like_dislike', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('character_id')->unsigned();
      $table->string('like');
      $table->string('like_dislike');
			$table->timestamp('created_at');
		});

    Schema::table('like_dislike', function($table)
    {
      $table->foreign('character_id')
            ->references('id')->on('characters')
            ->onDelete('cascade');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('like_dislike');
	}

}
