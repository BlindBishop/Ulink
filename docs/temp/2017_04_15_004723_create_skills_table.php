<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userEmail')->primary();
            $table->string('skill_name');
            $table->integer('rating');
            $table->timestamps();

        });
        Schema::table('skills', function (Blueprint $table)
        {
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
        Schema::dropIfExists('skills');
    }
}
