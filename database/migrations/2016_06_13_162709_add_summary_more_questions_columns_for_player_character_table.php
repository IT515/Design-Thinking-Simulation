<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSummaryMoreQuestionsColumnsForPlayerCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_character', function (Blueprint $table) {
          $table->string('biggest_camp_concern', 1500)->after('reason_for_profession')->nullable();
          $table->string('biggest_concern', 1500)->after('biggest_camp_concern')->nullable();
          $table->string('five_year_plan', 1500)->after('biggest_concern')->nullable();
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
          $table->dropColumn(['biggest_camp_concern', 'biggest_concern', 'five_year_plan']);
        });
    }
}
