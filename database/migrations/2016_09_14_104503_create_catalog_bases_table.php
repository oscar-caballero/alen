<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_bases', function (Blueprint $table) {
            $table->increments('id');                       
            $table->string('strategic');
            $table->string('status');
            $table->string('opportunity');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('formats');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::table('catalog_bases', function ($table) {
            $table->dropForeign('catalog_bases_product_id_foreign');
            $table->dropForeign('catalog_bases_format_id_foreign');
            $table->dropForeign('catalog_bases_category_id_foreign');
        });
        
        Schema::drop('catalog_bases');
        
    }
}
