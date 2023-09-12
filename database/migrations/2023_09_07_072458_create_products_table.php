<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     public function up()
     {
         Schema::create('products', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->text('description')->nullable();
             $table->decimal('price', 8, 2);
             $table->decimal('discount', 8, 2)->default(0.00);
             $table->integer('quantity');
             $table->string('image')->nullable();
             $table->unsignedBigInteger('category_id'); // Make category_id not nullable
             $table->timestamps();

             // Foreign key constraint to link products to categories
             $table->foreign('category_id')->references('id')->on('categories');
         });
     }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
