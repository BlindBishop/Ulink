<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->string('userEmail')->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->integer('section_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned()->nullable();
            $table->integer('document_id')->unsigned()->nullable();
            $table->integer('comment_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('userEmail')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
            $table->foreign('group_id')
                ->references('id')->on('groups')
                ->onDelete('cascade');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('section_id')
                ->references('id')->on('sections')
                ->onDelete('cascade');
            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->onDelete('cascade');
            $table->foreign('comment_id')
                ->references('id')->on('posts')
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
        Schema::dropIfExists('posts');
    }
}
