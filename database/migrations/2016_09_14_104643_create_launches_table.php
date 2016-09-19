<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launches', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('presentation');
            $table->date('launch_date');
            $table->integer('chain_id')->unsigned();
            $table->foreign('chain_id')->references('id')->on('chains');
            $table->string('image');
            $table->string('description');
            $table->string('attendant');
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
     Schema::table('launches', function ($table) {
            $table->dropForeign('launches_chain_id_foreign');
        });
        Schema::drop('launches');
    }
}
