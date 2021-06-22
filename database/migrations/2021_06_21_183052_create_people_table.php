<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('nationality_id');
            $table->string('name');
            $table->string('cpf', 12)->unique()->nullable();
            $table->date('birth');
            $table->integer('state_id')->nullable();
            $table->string('city')->nullable();
            $table->integer('academic_id');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('academic_id')->references('id')->on('academic_levels');
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
        Schema::dropIfExists('people');
    }
}
