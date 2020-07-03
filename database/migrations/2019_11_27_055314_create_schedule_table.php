<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->integer('idHorario')->primary();
            $table->string('group',65);
            $table->string('nameCarrer',65);
            $table->string('hour',65);
            $table->string('day',65);
            $table->string('nameSubject',65);
            $table->integer('numberAccount');
            $table->foreign('nameCarrer')->references('nameCarrer')->on('carrerupt');
            $table->foreign('group')->references('groupA')->on('group');
            $table->foreign('nameSubject')->references('nameSubject')->on('subjects');
            $table->foreign('numberAccount')->references('numberAccount')->on('teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
