<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_times', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('beginning');
            $table->dateTime('end');
            $table->string('privacy');
            $table->integer('group_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned()->nullable();
            $table->string('userEmail')->nullable();
            $table->timestamps();

            $table->foreign('group_id')
                ->references('id')->on('groups')
                ->onDelete('cascade');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('userEmail')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_times');
    }
}
