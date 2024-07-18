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
        Schema::create('product', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('name_product',225);
            $table->text('describe')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('img',225);
            $table->integer('view');
            $table->integer('discount');
            $table->unsignedBigInteger('id_brand')->nullable();
            $table->unsignedBigInteger('id_category')->nullable();
            $table->timestamps();
            $table->foreign('id_brand')->references('id_brand')->on('brand');
            $table->foreign('id_category')->references('id_category')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
