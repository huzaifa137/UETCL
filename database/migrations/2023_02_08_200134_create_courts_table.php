<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->id();
            $table->text('CRB');
            $table->text('Police_station_case_Ref');
            $table->text('Case_parties_UG_vs');
            $table->text('Due_Date');
            $table->text('Police__IOs');
            $table->text('Witnesses');
            $table->text('Evidence_on_Record');
            $table->text('Case_facilitation');
            $table->text('Status');
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
        Schema::dropIfExists('courts');
    }
}
