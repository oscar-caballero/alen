<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_values', function (Blueprint $table){
            $table->increments('id'); 
            $table->string('upc');
            $table->string('value');
            $table->string('share_sku');
            $table->decimal('proyeccion_12');
            $table->decimal('proyeccion_24');
            $table->decimal('share_categoria');
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
        Schema::drop('catalog_values');
    }
}
