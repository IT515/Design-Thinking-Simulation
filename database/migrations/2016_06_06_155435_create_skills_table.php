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
      $table->integer('profession_id')->unsigned();
      $table->string('skill');
      $table->timestamp('created_at');
		});

    Schema::table('skills', function($table)
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
    // $table->dropForeign('skills_profession_id_foreign');
		Schema::drop('skills');
	}

}
