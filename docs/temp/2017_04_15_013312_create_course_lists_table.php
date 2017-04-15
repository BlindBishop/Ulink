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
            $table->string('major')->primary();
            $table->integer('number')->primary();
            $table->string('Uname')->primary();
            $table->string('Uabb')->primary();
            $table->timestamps();
        });

        Schema::table('course_lists', function (Blueprint $table)
        {
            $table->foreign('Uname')
                ->references('Uname')->on('universities')
                ->onDelete('cascade');
            $table->foreign('Uabb')
                ->references('Uabb')->on('universities')
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
