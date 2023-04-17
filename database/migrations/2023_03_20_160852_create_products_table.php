<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->string('pro_name',2000);
            $table->string('quantity');
            $table->string('description',5000);
            $table->string('price_description',5000);
            $table->boolean('status')->comment('0 => Inactive, 1=> Active');
            $table->string('model');
            $table->string('color');
            $table->string('technology');
            $table->string('supported');
            $table->string('price');
            $table->string('images');
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
        Schema::dropIfExists('products');
    }
}
