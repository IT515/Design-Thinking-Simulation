<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMapCoordsColumnToCharaterVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('characterVideo', function(Blueprint $table)
		{
			$table->string('mapCoords');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('characterVideo', function(Blueprint $table)
		{
			$table->dropColumn('mapCoords');
		});
	}

}
