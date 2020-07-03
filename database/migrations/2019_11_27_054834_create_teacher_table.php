<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->integer('numberAccount')->primary();
            $table->string('nameTeacher',65);
            $table->string('lastNameP',65);
            $table->string('lastNameM',65);
            $table->string('nameCarrer',65);
            $table->foreign('nameCarrer')->references('nameCarrer')->on('carrerupt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
