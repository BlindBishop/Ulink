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
            $table->increments('id');
            $table->string('primeUser');
            $table->string('foreignUser');
            $table->string('relationship')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('primeUser')
                ->references('userEmail')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('foreignUser')
                ->references('userEmail')
                ->on('users')
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
