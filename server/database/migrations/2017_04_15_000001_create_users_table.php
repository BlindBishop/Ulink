<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('userEmail')->primary();
            $table->string('password');
            $table->string('first');
            $table->string('last');
            $table->string('bio')->nullable();
            $table->string('gradYr')->nullable();
            $table->string('major')->nullable();
            $table->string('professor');
            $table->string('Uname');
            $table->string('Uabb');
//            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('Uname')
                ->references('Uname')->on('universities')
                ->onDelete('cascade');
           });
        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('Uabb')
                ->references('Uabb')->on('universities');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
