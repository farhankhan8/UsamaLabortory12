<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('catagory_id');
            $table->string('name');
            $table->double('testFee');
            $table->integer('initialNormalValue');
            $table->integer('finalNormalValue');
            $table->integer('firstCriticalValue');
            $table->integer('finalCriticalValue');

            $table->string('units');

            $table->timestamps();
            $table->foreign('catagory_id')->references('id')->on('catagories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_tests');
    }
}
