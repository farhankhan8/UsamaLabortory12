<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPerformedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_performeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('available_test_id');
            $table->unsignedBigInteger('patient_id');


            $table->foreign('available_test_id')->references('id')->on('available_tests')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('patient_id')->references('id')->on('patients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->datetime('start_time');
            $table->string('state');
            $table->integer('testResult');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_performeds');
    }
}
