<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeReasonColumnForPlayerCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_character', function (Blueprint $table) {
          $table->renameColumn('reason_for_character','reason_for_profession');
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
          $table->renameColumn('reason_for_profession','reason_for_character');
        });
    }
}
