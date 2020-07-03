<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->integer('numberAccount');
            $table->string('nameStudent',65);
            $table->string('lastNameP',65);
            $table->string('lastNameM',65);
            $table->string('nameCarrer',65);
            $table->integer('quarters');
            $table->string('groupStudent',65);
            $table->string('email');
            $table->foreign('nameCarrer')->references('nameCarrer')->on('carrerupt');
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('groupStudent')->references('groupA')->on('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
