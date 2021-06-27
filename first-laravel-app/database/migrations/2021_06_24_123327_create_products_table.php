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
            // $table->unsignedBigInteger('creted_by_id');
            // $table->foreign('creted_by_id')->references('id')->on('users');
            // $table->unsignedBigInteger('catagory_id');
            // $table->foreign('catagory_id')->references('id')->on('catagories');
            $table->foreignId('creted_by_id')->constrained('users');
            $table->foreignId('catagory_id')->constrained('catagories');
            $table->string('name',255);
            $table->string('description',255);
            $table->double('unit_price');
            $table->string('image',255);
            $table->double('height');
            $table->double('width');
            $table->double('weight');
            $table->double('size');
            $table->tinyInteger('status')->default(0);
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
