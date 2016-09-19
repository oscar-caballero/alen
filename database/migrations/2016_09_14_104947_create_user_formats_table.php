<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_formats', function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('formats');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_formats', function ($table) {
            $table->dropForeign('users_formats_user_id_foreign'); 
            $table->dropForeign('users_formats_format_id_foreign');
        });
        
         Schema::drop('users_formats');
    }
}
