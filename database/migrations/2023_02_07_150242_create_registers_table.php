<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->text('police_station');
            $table->text('investigation_officer');
            $table->text('police_case_ref');
            $table->text('Inter_ref_number');
            $table->text('Transmission_Line');
            $table->text('Case_Status');
            $table->text('particulars_of_the_case');
            $table->text('Brief_facts_of_the_case');
            $table->Date('Date');
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
        Schema::dropIfExists('registers');
    }
}
