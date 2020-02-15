<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_activites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("season_id");
            $table->unsignedBigInteger("competitor_id");
            $table->unsignedBigInteger("activite_id");
            $table->string("description")->nullable();
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season_activites');
    }
}
