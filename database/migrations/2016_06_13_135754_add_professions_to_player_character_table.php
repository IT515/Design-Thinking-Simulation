<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionsToPlayerCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_character', function (Blueprint $table) {
          $table->integer('profession_id')->after('character_id')->unsigned();
        });

        Schema::table('player_character', function($table)
        {
          $table->foreign('profession_id')
                ->references('id')->on('professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_character', function (Blueprint $table) {
          $table->dropForeign('player_character_profession_id_foreign');
        });
    }
}
