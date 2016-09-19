<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planoramas', function (Blueprint $table){
            $table->increments('id');
            $table->string('actual');
            $table->string('proposal');
            $table->string('comment');
            $table->integer('launch_id')->unsigned();
            $table->foreign('launch_id')->references('id')->on('launches');
            $table->integer('chain_id')->unsigned();
            $table->foreign('chain_id')->references('id')->on('chains');
            
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
        Schema::table('planoramas', function ($table) {
            $table->dropForeign('planoramas_launch_id_foreign');
            $table->dropForeign('planoramas_chain_id_foreign');
        });
        Schema::drop('planoramas');
    }
}
