<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('major');
            $table->integer('course_number');
            $table->string('userEmail');
            $table->timestamps();
        });

        Schema::table('courses', function (Blueprint $table)
        {
            $table->foreign('course_number')
                ->references('number')->on('course_lists')
                ->onDelete('cascade');
            $table->foreign('major')
                ->references('major')->on('course_lists')
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
        Schema::dropIfExists('courses');
    }
}
