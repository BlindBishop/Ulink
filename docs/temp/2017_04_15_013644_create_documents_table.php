<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('url_loc');
            $table->integer('section_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->string('userEmail')->nullable();
            $table->timestamps();
        });

        Schema::table('documents', function (Blueprint $table)
        {
            $table->foreign('section_id')
                ->references('id')->on('sections')
                ->onDelete('cascade');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('group_id')
                ->references('id')->on('groups')
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
        Schema::dropIfExists('documents');
    }
}
