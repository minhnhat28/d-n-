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
        Schema::create('other_bill', function (Blueprint $table) {
            $table->id('id_ob');
            $table->string('name_pro',225);
            $table->string('brand_pro',225);
            $table->decimal('price_pro');
            $table->integer('quantity_pro');
            $table->unsignedBigInteger('id_bill')->nullable();
            $table->timestamps();
            $table->foreign('id_bill')->references('id_bill')->on('bill');
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
