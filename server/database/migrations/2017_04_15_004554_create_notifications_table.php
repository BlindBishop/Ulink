<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('sent');
            $table->boolean('viewed');
            $table->string('type');
            $table->string('primeUser');
            $table->string('foreignUser')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
