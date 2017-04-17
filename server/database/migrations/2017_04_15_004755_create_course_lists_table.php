<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lists', function (Blueprint $table) {
            $table->string('major');
            $table->integer('number');
            $table->string('Uname');
            $table->string('Uabb');
            $table->timestamps();

            $table->primary(array('major', 'number', 'Uname', 'Uabb'));
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
        Schema::dropIfExists('course_lists');
    }
}
