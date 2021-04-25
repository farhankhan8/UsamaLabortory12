<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRole1AhmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role1__ahmeds', function (Blueprint $table) {
            $table->integer('ahmed_id')->unsigned();

    $table->integer('role1_id')->unsigned();

    $table->foreign('ahmed_id')->references('id')->on('ahmeds')

        ->onDelete('cascade');

    $table->foreign('role1_id')->references('id')->on('role1s')

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
        Schema::dropIfExists('role1__ahmeds');
    }
}
