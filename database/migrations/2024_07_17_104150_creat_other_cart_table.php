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
        Schema::create('other_cart', function (Blueprint $table) {
            $table->id('id_oc');
            $table->integer('quantity_cart');
            $table->unsignedBigInteger('id_cart')->nullable();
            $table->timestamps();
            $table->foreign('id_cart')->references('id_cart')->on('cart');
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
