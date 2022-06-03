<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgeToHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->string("age")->default("Leeftijd onbekend");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->dropColumn("age");
        });
    }
}
