<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('primeUser');
            $table->string('foreignUser');
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
        Schema::dropIfExists('conversations');
    }
}
