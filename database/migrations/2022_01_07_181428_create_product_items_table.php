<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('color_id')->nullable()->references('id')->on('colors');
            $table->foreignId('size_id')->nullable()->references('id')->on('sizes');
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->float('price');
            $table->boolean('is_deal')->default(false)->index();
            $table->boolean('is_available')->default(true)->index();
            $table->boolean('is_active')->default(false)->index();
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
        Schema::dropIfExists('product_items');
    }
}
