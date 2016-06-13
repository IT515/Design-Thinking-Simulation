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
      $table->integer('profession_id')->unsigned();
      $table->timestamp('created_at');
		});

    Schema::table('one_items', function($table)
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
    // $table->dropForeign('one_items_profession_id_foreign');
		Schema::drop('one_items');
	}

}
