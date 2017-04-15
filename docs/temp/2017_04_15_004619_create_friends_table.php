<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->string('primeUser')->primary();
            $table->string('foreignUser')->primary();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('friends', function (Blueprint $table)
        {
            $table->foreign('primeUser')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
            $table->foreign('foreignUser')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
        });

        Schema::table('friends', function (Blueprint $table)
        {
            $table->foreign('primeUser')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
            $table->foreign('foreignUser')
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
        Schema::dropIfExists('friends');
    }
}
