<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('character_id')->unsigned();
      $table->string('skill');
      $table->timestamp('created_at');
		});

    Schema::table('skills', function($table)
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
		Schema::drop('skills');
	}

}
