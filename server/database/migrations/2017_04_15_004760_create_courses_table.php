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
            $table->string('Uname');
            $table->string('Uabb');
            $table->timestamps();

            $table->foreign('userEmail')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
            $table->foreign(array('major', 'course_number'))
                ->references(array('major', 'number'))
                ->on('course_lists')
                ->onDelete('cascade');
            $table->foreign(array('Uname', 'Uabb'))
                ->references(array('Uname', 'Uabb'))
                ->on('universities')
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
