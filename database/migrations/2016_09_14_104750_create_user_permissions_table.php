<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permissions', function (Blueprint $table){
            $table->increments('id');
            $table->boolean('catalog');
            $table->boolean('value');
            $table->boolean('launch');
            $table->boolean('user');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('user_permissions', function ($table) {
            $table->dropForeign('user_premissions_user_id_foreign');
        });
        Schema::drop('user_permissions');
    }
}
