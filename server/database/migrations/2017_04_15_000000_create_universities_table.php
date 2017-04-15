<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->string('Uname')->primary();
            $table->string('Uabb');
            $table->timestamps();
        });
        DB::unprepared('ALTER TABLE `universities` DROP PRIMARY KEY, ADD PRIMARY KEY (  `Uname` ,  `Uabb` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
