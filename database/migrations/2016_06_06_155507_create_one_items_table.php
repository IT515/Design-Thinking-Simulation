<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('one_items', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('item');
      $table->integer('character_id')->unsigned();
      $table->timestamp('created_at');
		});

    Schema::table('one_items', function($table)
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
		Schema::drop('one_items');
	}

}
