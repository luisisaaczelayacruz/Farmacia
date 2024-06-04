<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bill_of_sale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('seller');
            $table->string('products');
            $table->date('date');
            $table->integer('total');
            $table->integer('orders_id')->unsigned();
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_of_sale');
    }
};
