<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors_list', function (Blueprint $table) {
            $table->string('userEmail');
            $table->string('major');
            $table->string('minor');
            $table->timestamps();

            $table->primary(array('userEmail', 'major'));

            $table->foreign('userEmail')
                ->references('userEmail')->on('users')
                ->onDelete('cascade');
            $table->foreign('major')
                ->references('major')->on('majors')
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
        Schema::dropIfExists('majors_lists');
    }
}
