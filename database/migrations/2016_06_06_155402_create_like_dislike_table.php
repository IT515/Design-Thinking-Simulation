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
      $table->integer('profession_id')->unsigned();
      $table->string('like');
      $table->string('like_dislike');
			$table->timestamp('created_at');
		});

    Schema::table('like_dislike', function($table)
    {
      $table->foreign('profession_id')
            ->references('id')->on('professions')
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
    // $table->dropForeign('like_dislike_profession_id_foreign');
		Schema::drop('like_dislike');
	}

}
